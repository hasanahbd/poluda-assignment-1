<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->middleware('auth')->except('index', 'show');
    }
    public function index() {
        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.Â
     */
    public function store(StoreCategoryRequest $request) {
        $request->validated();
        Category::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'description' => $request->description,
        ]);
        return redirect()->route('posts.index')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category) {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category) {
        return view('categories.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category) {
        $request->validated();
        $category->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name),
            'description' => $request->description,
        ]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category) {
        //
    }
}
