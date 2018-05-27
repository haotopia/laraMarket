<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;
use App\Models\Goods;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GoodsesController extends Controller {
	public function __construct() {
	}

	public function show($store = 1) {
		$goodses = DB::table('goods');
		$catList = $goodses
			->join('categories', 'goods.cat_id', '=', 'categories.id')
			->select('categories.name', 'goods.market_id', 'goods.cat_id')
			->groupBy('cat_id')
			->having('market_id', $store)
			->get();
		$goodsList = DB::table('goods')
			->where('market_id', $store)
			->get();
		$List = [];
		$i = 0;
		foreach ($catList as $cat) {
			$goodses = [];
			foreach ($goodsList as $goods) {
				if ($goods->cat_id == $cat->cat_id) {
					$goodses[] = [
						'name' => $goods->name,
						'sale' => $goods->quntity,
						'price' => $goods->price,
						'id' => $goods->id,
					];
				}
			}
			$List[$i] = [
				'title' => $cat->name,
				'shoplist' => $goodses,
			];
			$i++;
		}
		return $List;
	}

	public function adminShow($store = 1) {

	}
	public function create(Goods $goods) {
		return view('goodsses.create_and_edit', compact('goods'));
	}

	public function store(GoodsRequest $request, ImageUploadHandler $uploader) {
		$data = [
			'name' => $request->name,
			'price' => $request->price,
			'quntity' => $request->save,
			'abstract' => $request->des,
			'cat_id' => $request->label,
			'updated_at' => Carbon::now()->toDateTimeString(),
		];

		if ($request->image) {
			$result = $uploader->save($request->image, 'goodsAvatars', 'goods', 362);
			if ($result) {
				$data['img'] = $result['path'];
			}
		}
		$goods = DB::table('goods');
		if ($request->goodsId) {
			$data['id'] = $request->goodsId;
			$goods->where('id', $data['id'])->update($data);
		} else {
			$data['created_at'] = Carbon::now()->toDateTimeString();
			$goods->insert($data);
		};
		return ['message' => 'success'];
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