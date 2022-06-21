<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Categories extends Controller
{
    public function index() {
        return view('categories.index', ['categories' => Category::all()]);
    }

    public function show($id) {
        return view('categories.show', ['category' => Category::findOrFail($id)]);
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

//        $values = $request->only(['title', 'content']);
//        Category::create($values);
        $values = $request->all();
        $category = new Category();
        $category->title = $values['title'];
        $category->content = $values['content'];
        $category->save();
        return redirect('/categories');
    }

    public function update(Request $request, $id) {
        $values = $request->all();

        $category = Category::findOrFail($id);
        $category->title = $values['title'];
        $category->content = $values['content'];
        $category->save();
        return redirect('/categories');
    }

    public function delete($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return 'Категория с id' .$id. ' удалена';
    }
}
