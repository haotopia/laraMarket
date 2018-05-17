<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;
use App\Models\Goods;

class GoodsesController extends Controller {
	public function __construct() {
	}

	public function index() {
		$goodsses = Goods::paginate();
		return view('goodsses.index', compact('goodsses'));
	}

	public function show(Goods $goods) {
		return view('goodsses.show', compact('goods'));
	}

	public function create(Goods $goods) {
		return view('goodsses.create_and_edit', compact('goods'));
	}

	public function store(GoodsRequest $request) {
		$goods = Goods::create($request->all());
		return redirect()->route('goodsses.show', $goods->id)->with('message', 'Created successfully.');
	}

	public function edit(Goods $goods) {
		$this->authorize('update', $goods);
		return view('goodsses.create_and_edit', compact('goods'));
	}

	public function update(GoodsRequest $request, Goods $goods) {
		$this->authorize('update', $goods);
		$goods->update($request->all());

		return redirect()->route('goodsses.show', $goods->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Goods $goods) {
		$this->authorize('destroy', $goods);
		$goods->delete();

		return redirect()->route('goodsses.index')->with('message', 'Deleted successfully.');
	}
}