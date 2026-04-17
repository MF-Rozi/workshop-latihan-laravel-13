<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::latest()->paginate(5);
        return view('pages.reviews.index', compact('reviews'));
    }
    public function create()
    {
        $attractions = \App\Models\Attraction::all();
        return view('pages.reviews.create', compact('attractions'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'attraction_id' => 'required|',
            'reviewer_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);
        \App\Models\Review::create($validated);
        return redirect()->route('reviews.index')
            ->with('success', 'Review created successfully.');
    }
    public function show($id)
    {
        $review = \App\Models\Review::findOrFail($id);
        return view('pages.reviews.show', compact('review'));
    }
    public function edit($id)
    {
        $review = \App\Models\Review::findOrFail($id);
        return view('pages.reviews.edit', compact('review'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'attraction_id' => 'required|',
            'reviewer_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);
        $review = \App\Models\Review::findOrFail($id);
        $review->update($validated);
        return redirect()->route('reviews.index')
            ->with('success', 'Review updated successfully.');
    }
    public function destroy($id)
    {
        $review = \App\Models\Review::findOrFail($id);
        $review->delete();
        return redirect()->route('reviews.index')
            ->with('success', 'Review deleted successfully.');
    }
}
