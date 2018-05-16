<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\GoodRequest;

class GoodsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$goods = Good::paginate();
		return view('goods.index', compact('goods'));
	}

    public function show(Good $good)
    {
        return view('goods.show', compact('good'));
    }

	public function create(Good $good)
	{
		return view('goods.create_and_edit', compact('good'));
	}

	public function store(GoodRequest $request)
	{
		$good = Good::create($request->all());
		return redirect()->route('goods.show', $good->id)->with('message', 'Created successfully.');
	}

	public function edit(Good $good)
	{
        $this->authorize('update', $good);
		return view('goods.create_and_edit', compact('good'));
	}

	public function update(GoodRequest $request, Good $good)
	{
		$this->authorize('update', $good);
		$good->update($request->all());

		return redirect()->route('goods.show', $good->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Good $good)
	{
		$this->authorize('destroy', $good);
		$good->delete();

		return redirect()->route('goods.index')->with('message', 'Deleted successfully.');
	}
}