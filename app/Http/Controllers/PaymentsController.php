<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Address;
use App\Models\Payment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller {

	public function show() {
		$payment = Payment::get()->toArray();
		$re = [];
		$i = 0;
		foreach ($payment as $list) {
			$li = DB::table('list')->where('payment', $list['id'])->get();
			$re['data'][$i]['id'] = $list['id'];
			$j = 0;
			foreach ($li as $l) {
				$goods = DB::table('goods')->where('id', $l->goods_id)->get();
				$re['data'][$i]['main'][$j] = [
					'title' => $goods[0]->name,
					'price' => $goods[0]->price,
					'num' => $l->quntity,
				];
				$j++;
			}
			switch ($list['status']) {
			case 0:
				$re['data'][$i]['result'] = '代付款';
				$re['data'][$i]['isPay'] = 1;
				break;
			case 1:
				$re['data'][$i]['result'] = '待收货';
				$re['data'][$i]['isPay'] = 0;
				break;
			case -1:
				$re['data'][$i]['result'] = '已删除';
				$re['data'][$i]['isPay'] = 0;
			default:
				$re['data'][$i]['result'] = '已完成';
				$re['data'][$i]['isPay'] = 0;
				break;
			}
			$i++;
		}
		return $re;
	}

	public function create(Payment $payment) {
		return view('payments.create_and_edit', compact('payment'));
	}

	public function store(PaymentRequest $request) {
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
		foreach ($req['list'] as $re) {
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
			Cache::put('payment', $payment->id);
			return ['message' => 0, 'payment' => $payment->id];
		}
		return ['message' => 1, 'payment' => $payment->id];
	}

	public function edit(Payment $payment) {
		$this->authorize('update', $payment);
		return view('payments.create_and_edit', compact('payment'));
	}

	public function update(PaymentRequest $request, Payment $payment) {
		$this->authorize('update', $payment);
		$payment->update($request->all());

		return redirect()->route('payments.show', $payment->id)->with('message', 'Updated successfully.');
	}

	public function listdata(PaymentRequest $request) {
		$id = $request->all();
		$list = Payment::where('id', $id)->first()->toArray();
		$li = DB::table('list')->where('payment', $list['id'])->get();
		$ads = Address::where('id', $list['ads_id'])->first();
		$re = [
			'id' => $list['id'],
			'name' => $ads->name,
			'phone' => $ads->phone,
			'address' => $ads->mainaddress,
		];

		$j = 0;
		$re['pcount'] = 0;
		foreach ($li as $l) {
			$goods = DB::table('goods')->where('id', $l->goods_id)->get();
			$re['list'][$j] = [
				'title' => $goods[0]->name,
				'price' => $goods[0]->price,
				'num' => $l->quntity,
				'img' => $goods[0]->img,
			];
			$j++;
		}
		switch ($list['status']) {
		case 0:
			$re['result'] = '代付款';
			break;
		case 1:
			$re['result'] = '待收货';
			break;

		default:
			$re['result'] = '已完成';
			break;
		}
		$re['footer']['time'] = $list['created_at'];
		$re['footer']['num1'] = $list['id'];
		return $re;
	}

	public function destroy(PaymentRequest $request) {
		if (Payment::where('id', $request->all())->update(['status' => -1])) {
			return ['message' => 1];
		}
		return 0;
	}
}