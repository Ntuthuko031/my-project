<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRecordController extends Controller
{
    //
	public function showUserRecords(){
		return view('user-records');
	}
}
