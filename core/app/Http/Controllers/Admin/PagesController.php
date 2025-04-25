<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pages;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::all();
        return view('admin.pages.index', compact('pages'));
    }
    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        Pages::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Page created successfully!');
    }

    public function show($id)
    {
        $page = Pages::findOrFail($id);
        return view('admin.pages.show', compact('page'));
    }
    public function edit($id)
    {
        $page = Pages::findOrFail($id);
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = Pages::findOrFail($id);
        $page->update($request->only(['title', 'content']));
        return redirect()->route('admin.page.index')->with('success', 'Page updated successfully!');
    }

    public function destroy($id)
    {
        Pages::destroy($id);
        return redirect()->route('admin.page.index')->with('success', 'Page deleted successfully!');
    }
}
