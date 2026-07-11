<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

            'name' => 'required|string|max:255',

            'description' => 'nullable|string',

        ]);

        $validated['slug'] = Str::slug($validated['name']);

        $validated['status'] = true;

        Category::create($validated);

        return redirect()
            ->route('categories.index')
            ->with('success', 'Kategorie erfolgreich erstellt.');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
{
    $validated = $request->validate([

        'name' => 'required|string|max:255',

        'description' => 'nullable|string',

    ]);

    $validated['slug'] = \Illuminate\Support\Str::slug($validated['name']);

    $category->update($validated);

    return redirect()
        ->route('categories.index')
        ->with('success', 'Kategorie erfolgreich aktualisiert.');
}

   public function destroy(Category $category)
{
    $category->delete();

    return redirect()
        ->route('categories.index')
        ->with('success', 'Kategorie erfolgreich gelöscht.');
}
}