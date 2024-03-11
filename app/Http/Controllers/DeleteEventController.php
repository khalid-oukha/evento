<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class DeleteEventController extends Controller
{
    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if($event)
        {
            $event->delete();
            return redirect()->back()->with('success', 'event deleted');
        }
    }
}
