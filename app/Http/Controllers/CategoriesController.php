<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Carbon\Carbon;

class CategoriesController extends Controller {

	public function show(Category $category) {
		return view('categories.show', compact('category'));
	}

	public function create(Category $category) {
		return view('categories.create_and_edit', compact('category'));
	}

	public function store(CategoryRequest $request) {
		$data = [
			'name' => $request->message,
			'storId' => 1,
			'created_at' => Carbon::now()->toDateTimeString(),
			'updated_at' => Carbon::now()->toDateTimeString(),
			'openId' => 'oMbyU0fB9CBrvDqGU9A8Q2eoBcmc',
		];
		$category = Category::create($data);

		return ['message' => 'success'];
	}

	public function edit(CategoryRequest $request) {
		Category::where('id', $request->id)
			->update(['name' => $request->message, 'updated_at' => Carbon::now()->toDateTimeString()]);
		return ['message' => 'success'];
	}

	public function update(CategoryRequest $request, Category $category) {
		$this->authorize('update', $category);
		$category->update($request->all());

		return redirect()->route('categories.show', $category->id)->with('message', 'Updated successfully.');
	}

	public function destroy(CategoryRequest $request) {

		Category::where('id', $request->id)->delete();

		return ['message' => 'success'];
	}
}