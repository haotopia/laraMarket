<?php

namespace App\Http\Controllers;

use App\Models\Shopcart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShopcartRequest;

class ShopcartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$shopcarts = Shopcart::paginate();
		return view('shopcarts.index', compact('shopcarts'));
	}

    public function show(Shopcart $shopcart)
    {
        return view('shopcarts.show', compact('shopcart'));
    }

	public function create(Shopcart $shopcart)
	{
		return view('shopcarts.create_and_edit', compact('shopcart'));
	}

	public function store(ShopcartRequest $request)
	{
		$shopcart = Shopcart::create($request->all());
		return redirect()->route('shopcarts.show', $shopcart->id)->with('message', 'Created successfully.');
	}

	public function edit(Shopcart $shopcart)
	{
        $this->authorize('update', $shopcart);
		return view('shopcarts.create_and_edit', compact('shopcart'));
	}

	public function update(ShopcartRequest $request, Shopcart $shopcart)
	{
		$this->authorize('update', $shopcart);
		$shopcart->update($request->all());

		return redirect()->route('shopcarts.show', $shopcart->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Shopcart $shopcart)
	{
		$this->authorize('destroy', $shopcart);
		$shopcart->delete();

		return redirect()->route('shopcarts.index')->with('message', 'Deleted successfully.');
	}
}