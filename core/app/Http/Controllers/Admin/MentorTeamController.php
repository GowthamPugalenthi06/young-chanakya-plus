<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MentorTeam;
use File;
use Illuminate\Http\Request;

class MentorTeamController extends Controller
{
    public function index(Request $request)
    {
        $selectedCategory = $request->input('category');
        $items = MentorTeam::when($selectedCategory, function ($query, $selectedCategory) {
            return $query->where('category', $selectedCategory);
        })->get();

        return view('admin.mentor_team.index', compact('items', 'selectedCategory'));
    }



    public function show($id)
    {
        $item = MentorTeam::findOrFail($id);
        return view('admin.mentor_team.show', compact('item'));
    }

    public function edit($id)
    {
        $item = MentorTeam::findOrFail($id);
        return view('admin.mentor_team.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = MentorTeam::findOrFail($id);

        $data = $request->only(['name', 'description', 'category', 'linkedin', 'twitter', 'facebook']);

        if ($request->hasFile('image')) {
            $oldPath = str_replace('/storage/', '', $item->image);
            $absoluteOldPath = base_path('../' . $oldPath);

            if (File::exists($absoluteOldPath)) {
                File::delete($absoluteOldPath);
            }

            $filename = time() . '.' . $request->image->extension();
            $relativePath = 'assets/yc/imgs/mentor_team/';
            $absolutePath = base_path('../' . $relativePath);

            if (!File::exists($absolutePath)) {
                File::makeDirectory($absolutePath, 0755, true);
            }

            $request->image->move($absolutePath, $filename);
            $data['image'] = $relativePath . $filename;
        }

        $item->update($data);

        return redirect()->route('admin.mentor_team.index')->with('success', 'Updated successfully!');
    }

    public function create()
    {
        return view('admin.mentor_team.create');
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

        $data = $request->only(['name', 'description', 'category', 'linkedin', 'facebook', 'twitter']);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $relativePath = 'assets/yc/imgs/mentor_team/';
            $absolutePath = base_path('../' . $relativePath);

            if (!File::exists($absolutePath)) {
                File::makeDirectory($absolutePath, 0755, true);
            }

            $request->image->move($absolutePath, $filename);
            $data['image'] = $relativePath . $filename;
        }

        MentorTeam::create($data);

        return redirect()->route('admin.mentor_team.index')->with('success', 'Added successfully!');
    }

    public function destroy($id)
    {
        $item = MentorTeam::findOrFail($id);
        $relativePath = str_replace('/storage/', '', $item->image);
        $absolutePath = base_path('../' . $relativePath);

        if (File::exists($absolutePath)) {
            File::delete($absolutePath);
        }

        $item->delete();

        return redirect()->route('admin.mentor_team.index')->with('success', 'Deleted successfully!');
    }
    public function showMentorsTeam()
    {
        $mentor_teams = MentorTeam::where('category', 'Mentor Team')->get();
        return view('yc.team.mentor-team', compact('mentor_teams'));
    }
    public function showAdvisoryTeam()
    {
        $advisory_team = MentorTeam::where('category', 'Advisory Team')->get();
        return view('yc.team.advisory-team', compact('advisory_team'));
    }
    public function showAcademicTeam()
    {
        $academic_team = MentorTeam::where('category', 'Academic Team')->get();
        return view('yc.team.academic-team', compact('academic_team'));
    }
    public function showVcTeam()
    {
        $vc_team = MentorTeam::where('category', 'VC Team')->get();
        return view('yc.team.vc-team', compact('vc_team'));
    }
    public function showManagementTeam()
    {
        $management_team = MentorTeam::where('category', 'Management Team')->get();
        return view('yc.team.management-team', compact('management_team'));
    }
}
