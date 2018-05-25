<?php

namespace App\Handlers;

class ImageUploadHandler {
	protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

	public function save($file, $folder, $file_prefix) {
		$folder_name = "uploads/images/$folder/" . date("Ym/d", time());
		$upload_path = public_path() . '/' . $folder_name;
		$extension = strtolower($file->getClientOriginalExtension()) ?: 'png';
		$filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;
		if (!in_array($extension, $this->allowed_ext)) {
			return false;
		}
		$file->move($upload_path, $filename);

		return [
			'path' => config('app.url') . "/$folder_name/$filename",
		];
	}
}