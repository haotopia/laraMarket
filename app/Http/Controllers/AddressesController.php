<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddressRequest;
use App\Models\Address;

class AddressesController extends Controller {
	public function __construct() {
	}

	public function show(Address $address) {
        $addresses = DB::table('addresses')->get();
        $addressList = array();
        $i = 0;
        foreach ($addresses as $key => $address) {
            $addressList[$i]['id'] = $address->id;
            $addressList[$i]['phone'] = $address->name;
            $addressList[$i]['img'] = $address->img;
            $i++;
        }
        return $storeList;
	}

	public function store(AddressRequest $request) {
		$address = Address::create($request->all());
		return [
            'error'=>'',
            'message'=>''
            ]
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