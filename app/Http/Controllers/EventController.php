<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $events = collect([
            ['title' => 'Event 1', 'image' => '/images/event1.jpg', 'link' => 'events/event1', 'date' => '2024-12-28'],
            ['title' => 'Event 2', 'image' => '/images/event2.png', 'link' => 'events/event2', 'date' => '2025-1-18'],
            ['title' => 'Event 3', 'image' => '/images/event3.jpg', 'link' => 'events/event3', 'date' => '2025-1-20'],
            // Add more events as needed
        ]);

        // Sort articles by date in descending order
        $sortedEvents = $events->sortByDesc('date');

        // Search functionality
        if ($request->has('search')) {
            $search = $request->input('search');
            $sortedEvents = $sortedEvents->filter(function ($events) use ($search) {
                return stripos($events['title'], $search) !== false;
            });
        }

        return view('events', ['events' => $sortedEvents]);
    }
}
