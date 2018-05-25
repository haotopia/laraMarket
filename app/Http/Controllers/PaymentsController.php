<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequest;
use App\Models\Payment;

class PaymentsController extends Controller {
	public function __construct() {
	}

	public function show(Payment $payment) {
		return view('payments.show', compact('payment'));
	}

	public function create(Payment $payment) {
		return view('payments.create_and_edit', compact('payment'));
	}

	public function store(PaymentRequest $request) {
		$payment = Payment::create($request->all());
		return redirect()->route('payments.show', $payment->id)->with('message', 'Created successfully.');
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