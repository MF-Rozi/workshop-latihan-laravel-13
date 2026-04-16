<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->input('search');
        if ($keyword != '') {

            $destinations = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $destinations = Destination::orderby('id')->paginate(5);
        }
        return view('pages.destinations.indexDestinasi', compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view('pages.destinations.detaildestinasi', compact('destination'));
    }

    public function create()
    {
        return view('pages.destinations.createDestination');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'location' => 'required|string|max:255',
            'ticket_price' => 'required|numeric',
            'working_hours' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
        ]);

        Destination::create($validated);

        return redirect('/destinations')->with('success', 'Destination created successfully.');
    }
    public function delete($id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->delete();
            return redirect('/destinations')->with('success', 'Destination deleted successfully.');
        } else {
            return redirect('/destinations')->with('error', 'Destination not found.');
        }
    }

    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('pages.destinations.editDestination', compact('destination'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable',
            'location' => 'required|string|max:255',
            'ticket_price' => 'required|numeric',
            'working_hours' => 'required|string|max:255',
            'working_days' => 'required|string|max:255',
        ]);

        $destination = Destination::find($id);
        if ($destination) {

            $destination->update($validated);
            return redirect('/destinations')->with('success', 'Destination updated successfully.');
        } else {
            return redirect('/destinations')->with('error', 'Destination not found.');
        }
    }
}
