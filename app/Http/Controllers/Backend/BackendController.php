<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner1;
use App\Models\Bonus;
use App\Models\Header;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }


    public function editHeader()
    {
        $header = Header::firstOrFail();
        return view('admin.pages.header_update', compact('header'));
    }

    public function updateHeader(Request $request)
    {
        $request->validate([
            'bg_color' => 'nullable|string',
            'description' => 'nullable|string',
            'description_text_color' => 'nullable|string',
            'btn_background_color' => 'nullable|string',
            'btn_text' => 'nullable|string',
            'btn_text_color' => 'nullable|string',
        ]);

        $header = Header::firstOrFail();
        $header->update($request->only([
            'bg_color', 'description', 'description_text_color',
            'btn_background_color', 'btn_text', 'btn_text_color'
        ]));

        return redirect()->route('admin.header.edit')->with('success', 'Header updated successfully!');
    }


    public function editHeroBanner()
    {
        $hero_banner = Banner1::firstOrFail();
        return view('admin.pages.edit_hero', compact('hero_banner'));
    }


    public function updateHeroBanner(Request $request, Banner1 $banner1)
    {
        // Add a debug statement to check if the method is being called
        \Log::info('Update Hero Banner method called');

        try {
            // Add a debug statement to check if the validation is being triggered
            \Log::info('Validating request...');

            $request->validate([
                'bg_color' => 'nullable|string',
                'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'title' => 'nullable|string',
                'subtitle' => 'nullable|string',
                'container_color' => 'nullable|string',
                'content' => 'nullable|string',
                'sub_content' => 'nullable|string',
                'sub_content_color' => 'nullable|string',
                'hero_image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            ]);

            // Add a debug statement to check if the validation passed
            \Log::info('Validation passed');

            // Update other banner fields
            $banner1->bg_color = $request->bg_color;
            $banner1->title = $request->title;
            $banner1->container_color = $request->container_color;
            $banner1->subtitle = $request->subtitle;
            $banner1->content = $request->content;
            $banner1->sub_content = $request->sub_content;
            $banner1->sub_content_color = $request->sub_content_color;

            // Handle image uploads

            if ($request->hasFile('image_path')) {

                \Log::info('Uploading image...');

                $image = $request->file('image_path');
                $imageName = time() . '_banner.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/banners'), $imageName);
                $banner1->image_path = 'uploads/banners/' . $imageName;
            }

            // Handle hero image uploads

            if ($request->hasFile('hero_image_path')) {
                \Log::info('Uploading hero image...');
                $heroImage = $request->file('hero_image_path');
                $heroImageName = time() . '_hero_banner.' . $heroImage->getClientOriginalExtension();
                $heroImage->move(public_path('uploads/banners'), $heroImageName);
                $banner1->hero_image_path = 'uploads/banners/' . $heroImageName;
            }

            // Save changes to the banner
            $banner1->save();

            // Add a debug statement to check if changes are saved
            \Log::info('Banner updated successfully');

            return redirect()->route('admin.edit_banner1')->with('success', 'Banner updated successfully!');
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error updating banner: ' . $e->getMessage());

            // Redirect back with error message
            return redirect()->route('admin.edit_banner1')->with('error', 'An error occurred while updating the banner.');
        }
    }


    public function bonus_view()
    {
        $bonuses = Bonus::all();
        return view('admin.pages.bonuses.index', compact('bonuses'));
    }

    public function createBonus()
    {
        return view('admin.pages.bonuses.create');
    }

    public function storeBonus(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048|dimensions:width=1000,height=1080',
        ], [
            'img.dimensions' => 'The image must be exactly 1000 x 1080 pixels.',
        ]);

        $bonus = new Bonus();
        $bonus->title = $request->title;
        $bonus->description = $request->description;

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/bonuses'), $imageName);
            $bonus->img = 'uploads/bonuses/' . $imageName;
        }

        $bonus->save();

        return redirect()->route('bonuses.all')->with('success', 'Bonus created successfully!');
    }

    public function editBonus(Bonus $bonus)
    {
        return view('admin.pages.bonuses.edit', compact('bonus'));
    }


    public function updateBonus(Request $request, Bonus $bonus)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048|dimensions:width=1000,height=1080',
        ], [
            'img.dimensions' => 'The image must be exactly 1000 x 1080 pixels.',
        ]);

        $bonus->title = $request->title;
        $bonus->description = $request->description;

        if ($request->hasFile('img')) {
            if ($bonus->img) {
                $previousImagePath = public_path($bonus->img);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }

            $image = $request->file('img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/bonuses'), $imageName);
            $bonus->img = 'uploads/bonuses/' . $imageName;
        }

        $bonus->save();

        return redirect()->route('bonuses.all')->with('success', 'Bonus updated successfully!');
    }


    public function deleteBonus(Bonus $bonus)
    {
        if ($bonus->img) {
            $previousImagePath = public_path($bonus->img);
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }

        $bonus->delete();
        return redirect()->route('bonuses.all')->with('success', 'Bonus deleted successfully!');
    }
}
