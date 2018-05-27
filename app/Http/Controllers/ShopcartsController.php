<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopcartRequest;
use App\Models\Payment;
use App\Models\Shopcart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ShopcartsController extends Controller {

	public function show() {
		$openid = Cache::get('openId');
		$shopcart = DB::table('shopcarts')->where('openId', $openid)->join('goods', 'goods.id', '=', 'shopcarts.goods_id')->get();
		$i = 0;
		foreach ($shopcart as $shop) {
			$list[$i] = [
				'id' => $shop->id,
				'intro' => $shop->name,
				'num' => $shop->quntity,
				'price' => $shop->price,
				'img' => $shop->img,
			];
			$i++;
		}
		return $list;
	}

	public function store(ShopcartRequest $request) {
		$user = Cache::get('openId');
		$i = 0;
		$req = $request->all();
		foreach ($req['list'] as $re) {
			$data = [
				'openId' => $user,
				'goods_id' => $re['id'],
				'quntity' => $re['num'],
			];
			Shopcart::create($data);
		}
		return ['message' => 'success'];
	}

	public function pay(Shopcart $shopcart) {
		$user = Cache::get('openId');
		$i = 0;
		$req = $request->all();

		$address = DB::table('addresses')->where(['openId' => $user, 'status' => 1])->first();
		$data = [];
		$data['openId'] = $user;
		if ($address) {
			$data['ads_id'] = $address->id;
		}
		$payment = Payment::create($data);
		foreach ($req['data'] as $re) {
			$listdata[$i] = [
				'openId' => Cache::get('openId'),
				'goods_id' => $re['id'],
				'quntity' => $re['num'],
				'payment' => $payment->id,
			];
			DB::table('list')->insert($listdata[$i]);
			$i++;
		}
		if (!$address) {
			return ['message' => 'address'];
		}
		return ['message' => 'success', 'payment' => $payment->id];
	}

	public function destroy(ShopcartRequest $request) {
		$user = Cache::get('openId');
		foreach ($request->data as $re) {
			Shopcart::where(['openId' => $user, 'goods_id' => $re['id']])->delete();
		}

		$shopcart = Shopcart::where('openId', $user)->get();
		$i = 0;
		foreach ($shopcart as $shop) {
			$goods = DB::table('goods')->where('id', $shop->goods_id)->get();
			$list[$i] = [
				'id' => $shop->goods_id,
				'intro' => $goods[0]->name,
				'num' => $shop->quntity,
				'price' => $goods[0]->price,
				'img' => $goods[0]->img,
			];
			$i++;
		}
		return $list;
	}
}