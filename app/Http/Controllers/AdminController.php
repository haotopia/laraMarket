<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {
	public function show() {
		return view('admin.index');
	}
	public function login() {
		return view('admin.login');
	}
	public function list() {
		return view('admin.list');
	}
	public function listdetail() {
		return view('admin.listdetail');
	}
	public function tableClassify() {
		$categories = DB::table('categories')->paginate(15);
		return view('admin.table_classify', ['categories' => $categories]);
	}
	public function tableCommitChange() {
		$categories = DB::table('categories')->paginate(100);
		return view('admin.table_commit_change', ['categories' => $categories]);
	}
	public function tableCommitList($id) {
		$goods = DB::table('goods')->where('id', $id)->first();
		$categories = DB::table('categories')->where('stor_id', $id)->paginate(100);
		return view('admin.table_commit_list', ['goods' => $goods, 'categories' => $categories]);
	}
	public function tableFontList() {
		$goods = DB::table('goods')->paginate(1);
		return view('admin.table_font_list', ['goodses' => $goods]);
	}
}
