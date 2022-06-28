<?php

namespace App\Http\Controllers;

use App\Rules\Slugrule;
use Illuminate\Http\Request;
use App\Models\Category;

class Categories extends Controller
{
    public function index() {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function show($slug) {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('categories.show', ['category' => $category]);
    }

    public function create() {
        return view('categories.create');
    }

    public function edit($id) {
        return view('categories.edit', ['category' => Category::findOrFail($id)]);
    }

    public function remove($id) {
        return view('categories.remove', ['category' => Category::findOrFail($id)]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => ['required', 'min:3', 'max:64', 'unique:categories'],
            'content' => ['required', 'min:10'],
            'slug' => ['required', new Slugrule(), 'min:3', 'max:64', 'unique:categories'],
        ]);

        $values = $request->only(['title', 'content', 'slug']);
        Category::create($values);
        return redirect('/categories');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title' => ['required', 'min:3', 'max:64', 'unique:categories,title,$id'],
            'content' => ['required', 'min:10'],
            'slug' => ['required', new Slugrule(), 'min:3', 'max:64', 'unique:categories,slug,$id'],
        ]);

        $values = $request->only(['title', 'content', 'slug']);
        $category = Category::findOrFail($id);
        $category->update($values);
        return redirect('/categories');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return 'Категория ' .$category->slug. ' удалена';
    }

    public function trash() {
        $trashCategories = Category::onlyTrashed()->get();;
        return view('trash.index', ['categories' => $trashCategories]);
    }

    public function showTrash($slug) {
        $category = Category::onlyTrashed()->where('slug', $slug)->firstOrFail();
        return view('trash.show', ['category' => $category]);
    }

    public function restoreTrash($id) {
        $category = Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        return 'Категория ' .$category->slug. ' восстановлена';
    }
}
