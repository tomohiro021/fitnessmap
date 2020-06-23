<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Gym;
use App\GymContent;
use App\Enums\PublicationStatus;
use App\Enums\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->name;

        $sql = <<<EOS
SELECT
    gyms.id AS gym_id,
    gyms.publication_status AS publication_status,
    gym_contents.id AS gym_content_id,
    gym_contents.*
FROM gyms
INNER JOIN (
    SELECT * FROM gym_contents WHERE (gym_id, updated_at) IN (
        SELECT gym_id, MAX(updated_at) AS updated_at FROM gym_contents where status=2 GROUP BY gym_id
    )
) gym_contents ON gyms.id=gym_contents.gym_id
WHERE gyms.publication_status=1 AND gym_contents.name LIKE ?
EOS;
        $gyms = DB::select($sql, ["%${name}%"]);

        $editting_gym_contents = Auth::user()->gymContents()
            ->whereIn('gym_contents.status', [Status::Editting, Status::Applying])
            ->orderBy('updated_at', 'DESC')->get();

        // if (Auth::check()) {
        //     $gym_contents = Auth::user()->gymContents()
        //     ->where('gym_contents.status', [Status::Editting, Status::Applying])
        //     ->orderBy('updated_at')->get();
            
        //     $data = array(
        //         'gyms' => $gyms,
        //         'gym_contents' => $gym_contents,
        //     );
        // } else {
        //     $data = array(
        //         'gyms' => $gyms,
        //     );
        // }
        
        return view('gyms.index', compact('gyms', 'editting_gym_contents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gym = Gym::find($id);
        $gym_content = $gym->publicatedGymContent();

        $editting_gym_content = Auth::user()->gymContents()
            ->where('gym_contents.gym_id', $id)
            ->whereIn('gym_contents.status', [Status::Editting, Status::Applying])
            ->orderBy('updated_at', 'DESC')->first();

        return view('gyms.show', compact('gym','gym_content', 'editting_gym_content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('system-only');

        $gym = Gym::find($id);
        $gym_content = GymContent::where('gym_id', '=', $id)->first();
        return view('gyms.edit', ['gym' => $gym, 'gym_content' => $gym_content]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('system-only');
        
        $gym = Gym::find($id);
        $gym->publication_status = $request->publication_status;
        $gym->save();
        
        $gym_content = GymContent::where('gym_id', '=', $id)->first();
        $gym_content->gym_id = $gym->id;
        $gym_content->user_id = Auth::id();
        $gym_content->name = $request->name;
        $gym_content->zip_code = $request->zip_code;
        $gym_content->address = $request->address;
        $gym_content->address1 = $request->address1;
        $gym_content->address2 = $request->address2;
        $gym_content->lat = $request->lat;
        $gym_content->lng = $request->lng;
        $gym_content->summary = $request->summary;
        $gym_content->detail = $request->detail;
        $gym_content->status = ($request->input('Approved') === 'Approved') ? Status::Approved : Status::Applying;
        $gym_content->save();
        return redirect("/gyms/{$gym->id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('system-only');

        $gym = Gym::find($id);
        $gym->delete();
        return redirect('/gyms'); 
    }
}
