<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller {

	public function show(Payment $payment) {
		return view('payments.show', compact('payment'));
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
			return ['message' => 'address'];
		}
		return ['message' => 'success', 'payment' => $payment->id];
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

	public function destroy(Payment $payment) {
		$this->authorize('destroy', $payment);
		$payment->delete();

		return redirect()->route('payments.index')->with('message', 'Deleted successfully.');
	}
}