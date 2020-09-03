<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    private $bookings = array(
        '0' => array(
            'name' => 'John Smith',
            'date' => 'Feb 05 2019',
            'time' => '10:00am',
            'message' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        ),
        '1' => array(
            'name' => 'Amanda',
            'date' => 'Jan 02 2019',
            'time' => '10:00am',
            'message' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd.'
        )
    );

    public function index() {
        return view('welcome');
    }

    public function getBookings()
    {
        return response()->json($this->bookings);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required'
        ]);

        return response()->json(['bookings' => $request->all()], 200);
    }
}
