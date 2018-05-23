<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Kontainer;
use View;
use DateTime;

class ViewController extends Controller
{
	public function index(){
		$getDate = date("l, d M Y");

		$data = Kontainer::all();
		// dd($data);

		$array_gabung = [];
		foreach ($data as $key => $value) {
			$gabung = $value->ip.'_'.$value->nrp.'_'.$value->port;
			array_push($array_gabung, $gabung);
		}
		// dd($array_gabung);


		$dir = '/home/fourirakbar/container-data';
		$scanned_directory = array_diff(scandir($dir), array('..', '.', 'log-data', 'new_read_file.sh', 'test.sh', 'read_file.sh'));

		// dd($scanned_directory);

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
		
		return view('dashboard', compact('getDate', 'data', 'scanned_directory', 'array_user', 'array_port', 'array_ip', 'array_gabung'));
	}

	public function log($value) {
		
		$explode = explode("_", $value);
		// dd($value);
		$user = $explode[1];
		$port = $explode[2];
		$ip = $explode[0];

		return view('log', compact('value', 'user', 'port', 'ip'));
	}

	public function history() {

	}
}