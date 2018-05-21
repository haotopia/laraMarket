<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class StoresController extends Controller {
	public function __construct() {

	}

	public function index() {
		$stores = Store::paginate();
		return view('stores.index', compact('stores'));
	}

	public function show() {
		$stores = DB::table('stores')->get();
		$storeList = array();
		$i = 0;
		foreach ($stores as $key => $store) {
			$storeList[$i]['id'] = $store->id;
			$storeList[$i]['name'] = $store->name;
			$storeList[$i]['img'] = $store->img;
			$storeList[$i]['abstract'] = $store->abstract;
			$i++;
		}
		return $storeList;
	}

	public function create(Store $store) {
		return view('stores.create_and_edit', compact('store'));
	}

	public function store(StoreRequest $request) {
		$store = Store::create($request->all());
		return redirect()->route('stores.show', $store->id)->with('message', 'Created successfully.');
	}

	public function edit(Store $store) {
		$this->authorize('update', $store);
		return view('stores.create_and_edit', compact('store'));
	}

	public function update(StoreRequest $request, Store $store) {
		$this->authorize('update', $store);
		$store->update($request->all());

		return redirect()->route('stores.show', $store->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Store $store) {
		$this->authorize('destroy', $store);
		$store->delete();

		return redirect()->route('stores.index')->with('message', 'Deleted successfully.');
	}
}