<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoriesController extends Controller
{

    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::first()->paginate(10)
        ]);
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:50', Rule::unique('categories', 'name')],
            'slug' => ['required', 'max:50', Rule::unique('categories', 'slug')]
        ]);

        Category::create($attributes);

        return redirect('/admin/categories')->with('success', 'Category Created Successfully!');
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }


    public function update(Category $category)
    {

        $attributes = request()->validate([
            'name' => ['required', 'max:50', Rule::unique('categories', 'name')->ignore($category)],
            'slug' => ['required', 'max:50', Rule::unique('categories', 'slug')->ignore($category)],
            'updated_at' => now()
        ]);

        $category->update($attributes);

        return redirect('/admin/categories')->with('success', 'Category Updated Successfully!');

    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/admin/categories')->with('success', 'Category Deleted Successfully!');
    }
}
