<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{

    public function index()
    {
        $events = [
            'Laravel Hacking and Coffee',
            'IoT with Raspberry Pi',
            'Free Vue.js Lessons',
        ];

        return view('events.index')->with('events', $events);
    }

    public function show($id)
    {
        $data = [
            'name' => 'Laravel Hacking and Coffee',
            'date' => date('d-m-Y'),
        ];
        return view('events.show')->with($data)->withId($id);
    }

    public function category($category, $subcategory = 'all')
    {
        dd("Category: {$category} Subcategory:{$subcategory}");
    }
}
