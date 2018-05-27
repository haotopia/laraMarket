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

	public function show(AddressRequest $request) {
		if ($request->id) {
			Address::where('status', 1)->update(['status' => 0]);
			Address::where('id', $request->id)->update(['status' => 1]);
		}
		$openid = Cache::get('openId');
		$addresses = DB::table('addresses')->where('openId', $openid)->get();
		$addressList = array();
		$i = 0;
		foreach ($addresses as $key => $address) {
			$addressList['data'][$i] = [
				'id' => $address->id,
				'name' => $address->name,
				'phone' => $address->phone,
				'address' => $address->mainaddress,
				'checked' => $address->status,
			];
			$i++;
		}
		return $addressList;
	}

	public function store(AddressRequest $request) {
		$openid = Cache::get('openId');
		$data = [
			'openId' => $openid,
			'name' => $request->name,
			'phone' => $request->phone,
			'province' => $request->district[0],
			'city' => $request->district[1],
			'county' => $request->district[2],
			'address' => $request->information,
			'mainaddress' => $request->mainAddress . $request->information,
		];
		if ($request->id) {
			Address::where('id', $request->id)->update($data);
			return [
				'error' => '',
				'message' => '',
			];
		}
		Address::create($data);
		return [
			'error' => '',
			'message' => '',
		];
	}

	public function edit(AddressRequest $request) {

		$openid = Cache::get('openId');
		$address = Address::where('id', $request->all())->first()->toArray();
		$addressList['state'] = [
			'id' => $address['id'],
			'name' => $address['name'],
			'phone' => $address['phone'],
			'address' => [
				$address['province'], $address['city'], $address['county'],
			],
			'information' => $address['address'],
		];

		return $addressList;
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