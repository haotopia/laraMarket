<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\Goods;
use App\Models\payment;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
	public function _construct() {
		$this->middleware('auth');
	}
	public function show() {
		if (Auth::user()) {
			return view('admin.index');
		}
		return view('admin.login');
	}
	public function login() {
		return view('admin.login');
	}
	public function list() {
		if (Auth::user()) {
			$payments = DB::table('payments')->paginate(5);
			$payment = Payment::get()->toArray();
			$re = [];
			$i = 0;
			foreach ($payment as $list) {
				$li = DB::table('list')->where('payment', $list['id'])->get();
				$ads = Address::where('id', $list['ads_id'])->first();
				if (!$ads) {
					continue;
				}

				$re[$i] = [
					'id' => $list['id'],
					'created_at' => $list['created_at'],
					'name' => $ads->name,
					'phone' => $ads->phone,
					'address' => $ads->mainaddress,
				];

				$j = 0;
				$re[$i]['pcount'] = 0;
				foreach ($li as $l) {
					$goods = DB::table('goods')->where('id', $l->goods_id)->get();
					$re[$i]['goods'][$j] = [
						'title' => $goods[0]->name,
						'price' => $goods[0]->price,
						'num' => $l->quntity,
						'img' => $goods[0]->img,
					];
					$re[$i]['pcount'] += $re[$i]['goods'][$j]['price'] * $re[$i]['goods'][$j]['num'];
					$j++;
				}
				$re[$i]['gcount'] = $j;
				switch ($list['status']) {
				case 0:
					$re[$i]['result'] = '代付款';
					break;
				case 1:
					$re[$i]['result'] = '待收货';
					break;

				default:
					$re[$i]['result'] = '已完成';
					break;
				}
				$i++;
			}
			return view('admin.list', ['payment' => $payments, 're' => $re]);
		}
		return view('admin.login');
	}
	public function listdetail($id) {
		if (Auth::user()) {
			$list = Payment::where('id', $id)->first()->toArray();
			$li = DB::table('list')->where('payment', $list['id'])->get();
			$ads = Address::where('id', $list['ads_id'])->first();
			$re = [
				'id' => $list['id'],
				'created_at' => $list['created_at'],
				'name' => $ads->name,
				'phone' => $ads->phone,
				'address' => $ads->mainaddress,
				'openId' => $list['openId'],
			];

			$j = 0;
			$re['pcount'] = 0;
			foreach ($li as $l) {
				$goods = DB::table('goods')->where('id', $l->goods_id)->get();
				$re['goods'][$j] = [
					'title' => $goods[0]->name,
					'price' => $goods[0]->price,
					'num' => $l->quntity,
					'img' => $goods[0]->img,
				];
				$re['pcount'] += $re['goods'][$j]['price'] * $re['goods'][$j]['num'];
				$j++;
			}
			$re['gcount'] = $j;
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
			return view('admin.listdetail', ['info' => $re]);
		}
		return view('admin.login');
	}
	public function tableClassify() {
		if (Auth::user()) {
			$categories = Category::paginate(15);
			return view('admin.table_classify', ['categories' => $categories]);
		}
		return view('admin.login');
	}
	public function tableCommitChange() {
		if (Auth::user()) {
			$categories = DB::table('categories')->paginate(100);
			return view('admin.table_commit_change', ['categories' => $categories]);
		}
		return view('admin.login');
	}
	public function tableCommitList($id) {
		if (Auth::user()) {
			$goods = DB::table('goods')->where('id', $id)->first();
			$categories = DB::table('categories')->where('stor_id', 1)->paginate(100);
			return view('admin.table_commit_list', ['goods' => $goods, 'categories' => $categories]);
		}
		return view('admin.login');
	}
	public function tableFontList() {
		if (Auth::user()) {
			$goods = Goods::paginate(10);
			return view('admin.table_font_list', ['goodses' => $goods]);
		}
		return view('admin.login');
	}
}
