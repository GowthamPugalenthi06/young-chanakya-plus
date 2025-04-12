<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HeroSection;

class HeroSectionController extends Controller
{
    public function edit()
    {
        $hero = HeroSection::getContent();
        return view('admin.home.hero.edit', compact('hero'));
    }

    public function update(Request $request)
{
    $data = [
        'title' => $request->input('title'),
        'description' => $request->input('description')
    ];

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $path = 'assets/yc/imgs/home/hero/';
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path($path), $imageName);

        // ✅ Store full URL instead of relative path
        $data['image_url'] = url($path . $imageName);
    }

    HeroSection::updateContent($data);

    return redirect()->back()->with('success', 'Hero section updated!');
}

}