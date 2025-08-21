<?php
namespace App\Http\Controllers;

use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LandingPageController extends Controller
{
    public function index()
    {
        $pages = LandingPage::latest()->get();
        return view('landing.index', compact('pages'));
    }

    public function show($slug)
    {
        $page = LandingPage::where('slug', $slug)->firstOrFail();
        return view('landing.show', compact('page'));
    }

    public function create()
    {
        return view('landing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $slug = Str::slug($request->title, '-');
        $path = $request->file('image')->store('uploads', 'public');

        LandingPage::create([
            'title' => $request->title,
            'slug' => $slug,
            'image_path' => $path,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        return redirect()->route('landing.index')->with('success', 'Landing page created!');
    }
}

