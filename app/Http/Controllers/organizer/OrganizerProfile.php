<?php

namespace App\Http\Controllers\organizer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizerProfile extends Controller
{
    public function index()
    {
        $organizer = auth()->user()->organizer;
        $events = $organizer->events()->withCount('reservations')->get();

        $total_reservations = 0;
        $totalCapacity = 0;
        $PercentageOfReservations = 0;



        foreach ($events as $event) {
            $totalCapacity = $totalCapacity + $event->capacity;
            $total_reservations = $total_reservations +  $event->reservations_count;
            $available_seats = $event->capacity - $event->reservations_count;
            $event->update([
                'availableSeats' => $available_seats
            ]); 
        }

        if ($totalCapacity > 0) {
            $PercentageOfReservations = ($total_reservations / $totalCapacity) * 100;
        }
        
        $total_events = $organizer->events->count();
        $total_approved_events = $organizer->events->where('status','active')->count();
        return view("front.profile.profile",compact("events","total_events","total_approved_events","total_reservations","PercentageOfReservations"));
    }

    
}
