<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use View;
use DateTime;

class ViewController extends Controller
{
	public function index(){
		$getDate = date("l, d M Y");
		
		$dir = '/home/fourirakbar/container-data';
		$scanned_directory = array_diff(scandir($dir), array('..', '.', 'log-data', 'new_read_file.sh', 'test.sh', 'read_file.sh'));

		$array_user = [];
		$array_port = [];
		$array_ip = [];

		foreach ($scanned_directory as $key => $value) {
			$explode = explode("_", $value);
			$user = $explode[1];
			$port = $explode[2];
			$ip = $explode[0];

			array_push($array_user, $user);
			array_push($array_port, $port);
			array_push($array_ip, $ip);
		}
		
		return view('dashboard', compact('getDate', 'scanned_directory', 'array_user', 'array_port', 'array_ip'));
	}

	public function log($value) {
		dd($value);
		return view('log');	
	}
}