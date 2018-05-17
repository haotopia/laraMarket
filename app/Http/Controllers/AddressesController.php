<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AddressesController extends Controller {
	public function __construct() {
	}

	public function show() {
		$openid = Cache::get('openId');
		$addresses = DB::table('addresses')->where('openId', $openid)->get();
		$addressList = array();
		$i = 0;
		foreach ($addresses as $key => $address) {
			$addressList[$i]['id'] = $address->id;
			$addressList[$i]['name'] = $address->name;
			$addressList[$i]['address'] = $address->address;
			$i++;
		}
		return $addressList;
	}

	public function store(AddressRequest $request) {
		//$address = Address::create($request->all());
		$address = $request->input();
		dd($address);
		$openid = Cache::get('openId');

		return [
			'error' => '',
			'message' => '',
		];
	}

	public function edit(Address $address) {
		$this->authorize('update', $address);
		return view('addresses.create_and_edit', compact('address'));
	}

	public function update(AddressRequest $request, Address $address) {
		$this->authorize('update', $address);
		$address->update($request->all());

		return redirect()->route('addresses.show', $address->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Address $address) {
		$this->authorize('destroy', $address);
		$address->delete();

		return redirect()->route('addresses.index')->with('message', 'Deleted successfully.');
	}
}