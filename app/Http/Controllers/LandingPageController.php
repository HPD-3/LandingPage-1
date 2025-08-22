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
        // 1) Validate basic fields
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url_path' => 'required|string|max:255|unique:landing_pages,url_path',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // 2) Derive slug from title
        $slug = Str::slug($validated['title']);

        // 3) Ensure the slug is unique (since it's used by /landing/{slug})
        if (LandingPage::where('slug', $slug)->exists()) {
            return back()
                ->withErrors(['title' => "The title generates a slug ('$slug') that already exists. Please modify the title."])
                ->withInput();
        }

        // 4) Store image
        $path = $request->file('image')->store('landing_images', 'public');

        // 5) Create record
        LandingPage::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'url_path' => $validated['url_path'],
            'image_path' => $path,
            'description' => $validated['description'] ?? null,
            'content' => $validated['content'] ?? null,
        ]);

        return redirect()->route('landing.index')->with('success', 'Landing Page created!');
    }


}
