<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Mail;
use Redirect;
use Session;

class HomeController extends Controller
{
	public function index()
	{
		return view('home');
	}
}