<?php

namespace App\Controllers;

class PageLoader extends BaseController
{
	public function home()
	{
		$data = array("title"=>"Tagline");
		echo view("templates/header",$data);
		echo view('pages/home',$data);
		echo view("templates/footer",$data);
	}
}
