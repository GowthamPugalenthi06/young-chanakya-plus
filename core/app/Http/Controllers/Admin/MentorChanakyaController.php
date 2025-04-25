<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MentorChanakya;
use File;
use Illuminate\Http\Request;

class MentorChanakyaController extends Controller
{
    public function index(Request $request)
{
    $query = MentorChanakya::query();

    $selectedCategory = $request->category;

    if (!empty($selectedCategory)) {
        $query->where('category', $selectedCategory);
    }

    $items = $query->latest()->get();

    return view('admin.mentor_chanakya.index', compact('items', 'selectedCategory'));
}


    public function show($id)
    {
        $item = MentorChanakya::findOrFail($id);
        return view('admin.mentor_chanakya.show', compact('item'));
    }

    public function edit($id)
    {
        $item = MentorChanakya::findOrFail($id);
        return view('admin.mentor_chanakya.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = MentorChanakya::findOrFail($id);

        $data = $request->only(['name', 'description', 'category', 'linkedin', 'twitter', 'facebook']);


        if ($request->hasFile('image')) {
            $oldPath = str_replace('/storage/', '', $item->image);
            $absoluteOldPath = base_path('../' . $oldPath);

            if (File::exists($absoluteOldPath)) {
                File::delete($absoluteOldPath);
            }

            $filename = time() . '.' . $request->image->extension();
            $relativePath = 'assets/yc/imgs/mentor_chanakya/';
            $absolutePath = base_path('../' . $relativePath);

            if (!File::exists($absolutePath)) {
                File::makeDirectory($absolutePath, 0755, true);
            }

            $request->image->move($absolutePath, $filename);
            $data['image'] = $relativePath . $filename;
        }

        $item->update($data);

        return redirect()->route('admin.mentor_chanakya.index')->with('success', 'Updated successfully!');
    }

    public function create()
    {
        return view('admin.mentor_chanakya.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|max:2048',
            'linkedin' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $data = $request->only(['name', 'description', 'category', 'linkedin', 'twitter', 'facebook']);


        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $relativePath = 'assets/yc/imgs/mentor_chanakya/';
            $absolutePath = base_path('../' . $relativePath);

            if (!File::exists($absolutePath)) {
                File::makeDirectory($absolutePath, 0755, true);
            }

            $request->image->move($absolutePath, $filename);
            $data['image'] = $relativePath . $filename;
        }

        MentorChanakya::create($data);

        return redirect()->route('admin.mentor_chanakya.index')->with('success', 'Added successfully!');
    }

    public function destroy($id)
    {
        $item = MentorChanakya::findOrFail($id);
        $relativePath = str_replace('/storage/', '', $item->image);
        $absolutePath = base_path('../' . $relativePath);

        if (File::exists($absolutePath)) {
            File::delete($absolutePath);
        }

        $item->delete();

        return redirect()->route('admin.mentor_chanakya.index')->with('success', 'Deleted successfully!');
    }
    public function showCEOMentors()
{
    $ceo_mentors = MentorChanakya::where('category', 'CEO and MD')->get();
    return view('yc.chanakyas.ceo-md', compact('ceo_mentors'));
}
public function showUnicornFounders()
{
    $unicorn_founders = MentorChanakya::where('category', 'Unicorn Founders')->get();
    return view('yc.chanakyas.unicorn-founders', compact('unicorn_founders'));
}
public function showExecutives()
{
    $executives = MentorChanakya::where('category', 'Executive')->get();
    return view('yc.chanakyas.executives', compact('executives'));
}
public function showFortune()
{
    $fortune_500s = MentorChanakya::where('category', "Fortune 500's")->get();
    return view('yc.chanakyas.fortune500', compact('fortune_500s'));
}

}
