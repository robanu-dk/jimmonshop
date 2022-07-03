<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use App\Models\RegisterEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'image' => 'image|file|max:10240',
            'pemateri' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'location' => 'required',
            'kuota' => 'required|integer',
            'benefits' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('event-image');
        }

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
            'image' => 'image|file|max:10240',
            'pemateri' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'location' => 'required',
            'kuota' => 'required|integer',
            'benefits' => 'required'
        ];

        if($request->slug != $event->slug) {
            $rules['slug'] = 'required|unique:events';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('event-image');
        }

        Event::where('id', $event->id)->update($validatedData);

        return redirect('/dashboard/events')->with('success','Event has been update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->image) {
            Storage::delete($event->image);
        }

        Event::destroy($event->id);

        return redirect('/dashboard/events')->with('success','Event has been deleted!!');
    }

    /**
     * View the list of participants for each event
     */
    public function partisipant($id)
    {
        return view('dashboard.events.partisipant', [
            'title' => 'List of participants from event "' . Event::find($id)->nama_event .'"',
            'partisipants' => Event::find($id)->registerEvent
        ]);
    }
}
