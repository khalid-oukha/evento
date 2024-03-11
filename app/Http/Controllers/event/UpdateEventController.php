<?php

namespace App\Http\Controllers\event;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateEventController extends Controller
{
    public function edit(Event $event)
    {
        if (auth()->check() && auth()->user()->id == $event->organizer_id) {
            $categories = Category::all();
            $event = Event::findOrFail($event->id);
            return view('front.profile.edit', compact('event', 'categories'));
        } else {

            return redirect()->route('event.edit')->with('error', 'You do not have permission to edit this event.');
        }
    }

    public function update(Request $request, Event $event)
    {
        if (auth()->id() != $event->organizer_id) {
            return redirect()->back()->with('error', 'You do not have permission to edit this event.');
        }

        $data = $request->validate([
            'title' => 'string|max:255',
            'date' => 'date',
            'location' => 'string|max:255',
            'capacity' => 'integer',
            'category_id' => 'integer|exists:categories,id',
            'reservation_type' => 'string',
            'description' => 'string',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            if ($event->image) {
                Storage::delete('public/images/' . $event->image);
            }

            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/images', $fileName);
            $data['image'] = $fileName;
        }

        $event->update($data);

        return redirect()->route('profile.index')->with('success', 'Event updated successfully.');
    }
}
