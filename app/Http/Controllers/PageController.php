<?php 

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        Page::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'صفحه با موفقیت ذخیره شد.');
    }

    public function index()
    {
        $pages = Page::latest()->get();
        return view('pages.index', compact('pages'));
    }

    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }
}
