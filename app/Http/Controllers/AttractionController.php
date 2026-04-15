<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.attractions.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        \App\Models\Attraction::create($request->all());

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
        $attraction = \App\Models\Attraction::findOrFail($id);
        return view('pages.attractions.edit', compact('attraction'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);

        $attraction = \App\Models\Attraction::findOrFail($id);
        $attraction->update($request->all());

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
