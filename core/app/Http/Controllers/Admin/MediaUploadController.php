<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MediaUpload;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MediaUploadController extends Controller
{
    public function index()
    {
        $media = MediaUpload::all();
        return view('admin.media_upload.index', compact('media'));
    }

    public function create()
    {
        $pages = [
            'home' => ['hero', 'growth', 'cta'],
            'about' => ['hero', 'founder', 'vision_and_mission', 'cta'],
            'membership' => ['hero'],
            'learning' => ['hero', 'cta'],
            'program' => ['hero', 'yc_learning', 'cta'],
            'chanakya' => ['hero1', 'hero2', 'hero3', 'hero4'],
            'teams' => ['hero1', 'hero2', 'hero3', 'hero4', 'hero5'],
        ];

        return view('admin.media_upload.create', compact('pages'));
    }

    public function store(Request $request)
{
    $request->validate([
        'page' => 'required|string',
        'section' => 'required|string',
        'media_type' => 'required|in:image,video',
        'media_files.*' => 'required|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480',
    ]);

    foreach ($request->file('media_files') as $file) {
        $relativePath = 'assets/yc/imgs/' . $request->page . '/' . $request->section . '/';
        $absolutePath = base_path('../' . $relativePath); // go out of core folder

        if (!File::exists($absolutePath)) {
            File::makeDirectory($absolutePath, 0755, true);
        }

        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($absolutePath, $filename);

        MediaUpload::create([
            'page' => $request->page,
            'section' => $request->section,
            'media_type' => $request->media_type,
            'file_path' => url($relativePath . $filename),
        ]);
    }

    return back()->with('success', 'Media files uploaded successfully.');
}


    public function show($id)
    {
        $media = MediaUpload::findOrFail($id);
        return view('admin.media_upload.show', compact('media'));
    }

    public function edit($id)
    {
        $media = MediaUpload::findOrFail($id);
        return view('admin.media_upload.edit', compact('media'));
    }

    public function update(Request $request, $id)
{
    $media = MediaUpload::findOrFail($id);

    $request->validate([
        'page' => 'required|string',
        'section' => 'required|string',
        'media_type' => 'required|in:image,video',
        'media_file' => 'nullable|file|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480',
    ]);

    if ($request->hasFile('media_file')) {
        // Delete old file
        $oldPath = str_replace(url('/'), '', $media->file_path);
        $absoluteOldPath = base_path('../' . $oldPath);
        if (File::exists($absoluteOldPath)) {
            File::delete($absoluteOldPath);
        }

        $relativePath = 'assets/yc/imgs/' . $request->page . '/' . $request->section . '/';
        $absolutePath = base_path('../' . $relativePath);

        if (!File::exists($absolutePath)) {
            File::makeDirectory($absolutePath, 0755, true);
        }

        $filename = time() . '_' . uniqid() . '.' . $request->file('media_file')->getClientOriginalExtension();
        $request->file('media_file')->move($absolutePath, $filename);

        $media->file_path = url($relativePath . $filename);
    }

    $media->update([
        'page' => $request->page,
        'section' => $request->section,
        'media_type' => $request->media_type,
    ]);

    return redirect()->route('admin.media.upload.index')->with('success', 'Media updated successfully!');
}




public function destroy($id)
{
    $media = MediaUpload::findOrFail($id);

    // Delete the media file from the disk
    $relativePath = str_replace('/storage/', '', $media->file_path);
    $absolutePath = base_path('../' . $relativePath); // go out of core folder

    if (File::exists($absolutePath)) {
        File::delete($absolutePath);  // Deleting the file from the storage path
    }

    // Delete the media record from the database
    $media->delete();

    return redirect()->route('admin.media.upload.index')->with('success', 'Media deleted successfully!');
}

}
