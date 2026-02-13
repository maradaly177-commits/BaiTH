<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
         $categories = Category::all();

    return view('category.create', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();


        return view('category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id',
            'is_active' => 'nullable|boolean',
            'image' => 'nullable|string'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'parent_id' => $request->parent_id,
            'is_active' => $request->is_active ?? 1,
            'is_delete' => 0,
            'image' => $request->image
        ]);

        return redirect()->route('categories.index')
            ->with('success', 'Thêm danh mục thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $category = Category::findOrFail($id);

        return view('category.detail', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $category = Category::findOrFail($id);

        $categories = Category::where('id', '!=', $id)
            ->where('is_delete', 0)
            ->get();

        return view('category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
{
    // tìm category
    $category = Category::findOrFail($id);

    // validate
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'parent_id' => 'nullable|exists:categories,id',
        'is_active' => 'nullable|boolean',
        'image' => 'nullable|string'
    ]);

    // không cho chọn chính nó làm parent
    if ($request->parent_id == $category->id) {
        return back()->withErrors([
            'parent_id' => 'Không thể chọn chính nó làm danh mục cha'
        ]);
    }

    // update
    $category->update([
        'name' => $request->name,
        'description' => $request->description,
        'parent_id' => $request->parent_id,
        'is_active' => $request->is_active ?? 1,
        'image' => $request->image
    ]);

    // redirect
    return redirect()
        ->route('categories.index')
        ->with('success', 'Cập nhật danh mục thành công');
}


/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id): RedirectResponse
{
    // tìm category
    $category = Category::findOrFail($id);

    // soft delete
    $category->update([
        'is_delete' => 1
    ]);

    // redirect
    return redirect()
        ->route('categories.index')
        ->with('success', 'Xóa danh mục thành công');
}

}
