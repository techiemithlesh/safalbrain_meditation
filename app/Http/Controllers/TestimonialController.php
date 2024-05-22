<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.pages.testimonial.testimonials_list', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.testimonial.testimonial_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'feedback' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',// Maximum 2MB
            'video_link' => 'nullable|url',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/testimonials'), $imageName);
            $photoPath = 'uploads/testimonials/' . $imageName;
        } else {
            $photoPath = null;
        }

        // Create new testimonial
        $testimonial = new Testimonial();
        $testimonial->name = $request->input('name');
        $testimonial->designation = $request->input('designation');
        $testimonial->feedback = $request->input('feedback');
        $testimonial->photo = $photoPath;
        $testimonial->video_link = $request->input('video_link');

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.pages.testimonial.edit_testinonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'feedback' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Maximum 2MB
            'video_link' => 'nullable|url',
        ]);

        // Handle file upload
        if ($request->hasFile('photo')) {
            // Delete previous photo if exists
            if ($testimonial->photo) {
                unlink(public_path($testimonial->photo));
            }
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('uploads/testimonials'), $imageName);
            $photoPath = 'uploads/testimonials/' . $imageName;
        } else {
            $photoPath = $testimonial->photo;
        }

        // Update the testimonial
        $testimonial->update([
            'name' => $request->input('name'),
            'designation' => $request->input('designation'),
            'feedback' => $request->input('feedback'),
            'photo' => $photoPath,
            'video_link' => $request->input('video_link'),
        ]);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete the testimonial's associated image if it exists
        if ($testimonial->photo) {
            $filePath = public_path($testimonial->photo);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        // Delete the testimonial
        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
