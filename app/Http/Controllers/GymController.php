<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Gym;
use App\GymContent;
use App\Enums\PublicationStatus;
use App\Enums\Status;
use Illuminate\Support\Facades\Auth;

class GymController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gyms = Gym::orderBy('id')->get();
        return view('gyms.index', ['gyms' => $gyms]);
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
        $gym_content = GymContent::where('gym_id', '=', $id)->first();
        return view('gyms.show', ['gym' => $gym, 'gym_content' => $gym_content]);
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
