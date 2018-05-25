<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller {

	public function show($storeId) {
		$comments = DB::table('comments')->where('storeId', $storeId)->get();
		$commentList = array();
		$i = 0;
		foreach ($comments as $key => $comment) {
			$user = DB::table('users')->where('openId', $comment->openId)->first();
			$commentList[$i]['id'] = $comment->id;
			$commentList[$i]['name'] = $user->name;
			$commentList[$i]['description'] = $comment->description;
			$commentList[$i]['comment'] = $comment->comment;
			$commentList[$i]['url'] = $user->avatar;
			$i++;
		}
		return $commentList;
	}

	public function create(Comment $comment) {
		return view('comments.create_and_edit', compact('comment'));
	}

	public function store(CommentRequest $request) {
		$comment = Comment::create($request->all());
		return redirect()->route('comments.show', $comment->id)->with('message', 'Created successfully.');
	}

	public function edit(Comment $comment) {
		$this->authorize('update', $comment);
		return view('comments.create_and_edit', compact('comment'));
	}

	public function update(CommentRequest $request, Comment $comment) {
		$this->authorize('update', $comment);
		$comment->update($request->all());

		return redirect()->route('comments.show', $comment->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Comment $comment) {
		$this->authorize('destroy', $comment);
		$comment->delete();

		return redirect()->route('comments.index')->with('message', 'Deleted successfully.');
	}
}