<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Blog extends BaseController
{
	public function index()
	{
		$data['title'] = 'My Blog';
		$data['content'] = 'Konten Website';

		return view('blog_view', $data);
	}
}
