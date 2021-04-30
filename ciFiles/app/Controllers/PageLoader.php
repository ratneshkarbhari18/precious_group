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
	public function about()
	{
		$data = array("title"=>"About Us");
		echo view("templates/header",$data);
		echo view('pages/about',$data);
		echo view("templates/footer",$data);
	}
	public function all_projects()
	{
		$data = array("title"=>"All Projects");
		echo view("templates/header",$data);
		echo view('pages/all_projects',$data);
		echo view("templates/footer",$data);
	}
	public function project($slug)
	{
		$data = array("title"=>"Project Title");
		echo view("templates/header",$data);
		echo view('pages/project',$data);
		echo view("templates/footer",$data);
	}
	public function investor_corner(){
		$data = array("title"=>"Investors Corner");
		echo view("templates/header",$data);
		echo view('pages/investors_corner',$data);
		echo view("templates/footer",$data);
	}

}
