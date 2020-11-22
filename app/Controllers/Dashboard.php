<?php namespace App\Controllers;

use App\Models\UserModel;


class Dashboard extends BaseController
{
	public function index()
	{
    

       echo view("includes/header");
       echo view("index");
       echo view("includes/footer");
    }
    

}
