<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use Illuminate\Http\Request;

class EventDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.events.index',[
            'title' => 'List of Events',
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.events.create', [
            'title' => 'Create New Event',
            'admins' => Admin::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_event' => 'required',
            'admin_id' => 'required',
            'slug' => 'required|unique:events',
            'image' => 'required',
            'pemateri' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'location' => 'required',
            'benefits' => 'required'
        ]);

        Event::create($validatedData);

        return redirect('/dashboard/events')->with('success','Event create successful!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('dashboard.events.show',[
            'title' => $event->nama_event,
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.events.edit', [
            'title' => 'Edit Event',
            'admins' => Admin::all(),
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {

        $rules = [
            'nama_event' => 'required',
            'admin_id' => 'required',
            'image' => 'required',
            'pemateri' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'location' => 'required',
            'benefits' => 'required'
        ];

        if($request->slug != $event->slug) {
            $rules['slug'] = 'required|unique:events';
        }

        $validatedData = $request->validate($rules);

        Event::where('id', $event->id)->update($validatedData);

        return redirect('/dashboard/events')->with('success','Category has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Event::destroy($event->id);

        return redirect('/dashboard/events')->with('success','Event has been deleted!!');
    }
}
