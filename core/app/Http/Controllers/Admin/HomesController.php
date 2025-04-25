<?php
namespace App\Http\Controllers\Admin;

use App\Homes;
use App\Http\Controllers\Controller;
use App\Models\Home;
use DB;
use File;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
        $homes = Homes::all();
        return view('admin.homes.index', compact('homes'));
    }

    public function show($id)
    {
        $home = Homes::findOrFail($id);
        return view('admin.homes.show', compact('home'));
    }

    public function edit($id)
    {
        $home = Homes::findOrFail($id);
        return view('admin.homes.edit', compact('home'));
    }

    public function update(Request $request, $id)
{
    $home = Homes::findOrFail($id);

    $data = $request->only(['name', 'description', 'linkedin', 'facebook', 'twitter']);


    if ($request->hasFile('image')) {
        // Delete the old image file if it exists
        $oldPath = str_replace('/storage/', '', $home->image);
        $absoluteOldPath = base_path('../' . $oldPath);  // Get the absolute path for the old file
        if (File::exists($absoluteOldPath)) {
            File::delete($absoluteOldPath);  // Delete the old file from storage
        }

        // Upload the new image
        $filename = time() . '.' . $request->image->extension();
        $relativePath = 'assets/yc/imgs/mentor_home/';  // Define the path to store images
        $absolutePath = base_path('../' . $relativePath);  // Get the absolute path outside of the core folder

        // Create the directory if it doesn't exist
        if (!File::exists($absolutePath)) {
            File::makeDirectory($absolutePath, 0755, true);
        }

        // Move the new image to the folder
        $request->image->move($absolutePath, $filename);
        $data['image'] = $relativePath . $filename;  // Store the relative path
    }

    // Update the home record with the new data
    $home->update($data);

    return redirect()->route('admin.homes.index')->with('success', 'Updated successfully!');
}

    public function create()
{
    return view('admin.homes.create');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'linkedin' => 'nullable|url',
        'facebook' => 'nullable|url',
        'twitter' => 'nullable|url',
    ]);
    

    $data = $request->only(['name', 'description']);

    if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $relativePath = 'assets/yc/imgs/mentor_home/';  // Define the path to store images
        $absolutePath = base_path('../' . $relativePath);  // Get the absolute path outside of the core folder

        // Create directory if it doesn't exist
        if (!File::exists($absolutePath)) {
            File::makeDirectory($absolutePath, 0755, true);
        }

        // Move the image to the folder
        $request->image->move($absolutePath, $filename);
        $data['image'] = $relativePath . $filename;
    }

    Homes::create($data);

    return redirect()->route('admin.homes.index')->with('success', 'Member added successfully!');
}

public function destroy($id)
{
    $home = Homes::findOrFail($id);

    // Get the relative path of the image
    $relativePath = str_replace('/storage/', '', $home->image);
    $absolutePath = base_path('../' . $relativePath); // Get the absolute path outside of the core folder

    // Check if the file exists and delete it
    if (File::exists($absolutePath)) {
        File::delete($absolutePath);  // Deleting the file from the storage path
    }

    // Delete the home record from the database
    $home->delete();

    return redirect()->route('admin.homes.index')->with('success', 'Media deleted successfully!');
}
public function showMentors()
{
    $mentors = DB::table('mentor_homes')->get();
    return view('yc.home', compact('mentors'));
}

}
