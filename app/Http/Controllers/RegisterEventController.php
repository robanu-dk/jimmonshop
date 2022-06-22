<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\RegisterEvent;
use Illuminate\Http\Request;

class RegisterEventController extends Controller
{
    public function index(Event $event)
    {
        $registered = false;
        $size = RegisterEvent::all()->count();
        $n = 1;
        while(($n <= $size) && !$registered) {
            if(RegisterEvent::find($n)->event_id == $event->id && RegisterEvent::find($n)->user_id == auth()->user()->id) {
                $registered = true;
            }
            $n = $n + 1;
        }

        if($registered) {
            return redirect('/events')->with('success','You have registered. You can check event information on the dashboard!!');
        }

        return view('registerEvent.index', [
            'title' => 'Register Event \'' . $event->nama_event . '\'',
            'event' => $event,
            'user' => auth()->user()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'event_id' => 'required',
            'nama_pendaftar' => 'required',
            'email' => 'required|email:dns',
            'asal_instansi' => 'required',
            'noTelp' => 'required'
        ]);

        RegisterEvent::create($validatedData);

        return redirect('/events')->with('success','You are registered. Event details can be seen on the dashboard!!');
    }

}
