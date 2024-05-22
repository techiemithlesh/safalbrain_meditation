<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function editMentor(){
        $mentor = Mentor::firstOrFail();
        return view('admin.pages.mentor_update', compact('mentor'));
    }

    public function updateMentor(Request $request)
    {
        $mentor = Mentor::firstOrFail();

        $request->validate([
            'bg_color' => 'required|string',
            'mentor_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'main_heading' => 'required|string',
            'mentor_name' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('mentor_img')) {
            $image = $request->file('mentor_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/mentors'), $imageName);
            $mentor->mentor_img = 'uploads/mentors/' . $imageName;
        }

        $mentor->bg_color = $request->bg_color;
        $mentor->main_heading = $request->main_heading;
        $mentor->mentor_name = $request->mentor_name;
        $mentor->description = $request->description;

        $mentor->save();

        return redirect()->route('admin.edit.mentor')->with('success', 'Mentor updated successfully!');
    }
}
