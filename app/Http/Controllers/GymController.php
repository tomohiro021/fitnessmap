<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Gym;
use App\Enums\PublicationStatus;

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
        return view('gyms.show', ['gym' => $gym]);
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
        return view('gyms.edit', ['gym' => $gym]);
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
