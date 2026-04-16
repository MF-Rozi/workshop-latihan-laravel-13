<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class AttractionController extends Controller
{
    public function index(Request $request)
    {

        $keyword = $request->input('search');
        if ($keyword) {
            $attractions = \App\Models\Attraction::where('name', 'like', "%$keyword%")
                ->orWhere('description', 'like', "%$keyword%")
                ->latest()
                ->paginate(10);
        } else {
            $attractions = \App\Models\Attraction::latest()->paginate(10);
        }

        return view('pages.attractions.index', compact('attractions'));
    }
    public function create()
    {
        $destinations = Destination::all();
        return view('pages.attractions.create', compact('destinations'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'destination_id' => 'required|exists:destinations,id',
                'name' => 'required|string|max:255',
                'description' => 'nullable',
            ]
        );
        \App\Models\Attraction::create($validated);

        return redirect()->route('attractions.index')
            ->with('success', 'Attraction created successfully.');
    }
    public function show($id)
    {
        $attraction = \App\Models\Attraction::findOrFail($id);
        return view('pages.attractions.show', compact('attraction'));
    }
    public function edit($id)
    {
        $destinations = Destination::all();
        $attraction = \App\Models\Attraction::findOrFail($id);
        return view('pages.attractions.edit', compact('attraction', 'destinations'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $attraction = \App\Models\Attraction::findOrFail($id);
        $attraction->update($validated);

        return redirect()->route('attractions.index')
            ->with('success', 'Attraction updated successfully.');
    }
    public function destroy($id)
    {
        $attraction = \App\Models\Attraction::findOrFail($id);
        $attraction->delete();

        return redirect()->route('attractions.index')
            ->with('success', 'Attraction deleted successfully.');
    }
}
