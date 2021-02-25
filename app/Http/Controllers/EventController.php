<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', [
            'events' => $events
        ]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'duration' => ['required'],
            'featured' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1999',
        ]);
        // Image upload
        $imageName = time() . '.' . request()->featured->getClientOriginalExtension();
        request()->featured->storeAs('public/images/events', $imageName);

        $event = Event::create([
            'title' => request()->title,
            'description' => request()->description,
            'featured' => $imageName,
            'price' => request()->price,
            'duration' => request()->duration,
            'date' => request()->date
        ]);
        return redirect()->route('events.index')->with('success', 'An Event has been added!');
    }

    public function edit(Event $event)
    {
        return view('events.edit', ['event' => $event]);
    }

    public function update(Event $event)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'duration' => ['required'],
            'featured' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1999',
        ]);
        // Image upload
        $imageName = $event->featured;
        if (request()->has('featured')) {
            $imageName = time() . '.' . request()->featured->getClientOriginalExtension();
            request()->featured->storeAs('public/images/events', $imageName);
        }
        $event->update([
            'title' => request()->title,
            'description' => request()->description,
            'featured' => $imageName,
            'price' => request()->price,
            'duration' => request()->duration,
            'date' => request()->date
        ]);
        return redirect()->route('events.index')->with('success', 'Event has been updated successfully');
    }

    public function show()
    { }

    public function destroy(Event $event)
    {
        $event->delete();
        return back()->with('warning', 'Event has been Trashed successfully');
    }
}
