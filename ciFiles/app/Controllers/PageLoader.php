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
	public function all_projects()
	{
		$data = array("title"=>"All Projects");
		echo view("templates/header",$data);
		echo view('pages/all_projects',$data);
		echo view("templates/footer",$data);
	}

}
