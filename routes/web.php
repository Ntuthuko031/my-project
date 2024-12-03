<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Livewire\Records;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('records', function (){
	return view('user-records');
})->middleware('auth');

Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function(){
	return view('auth.register');
});
Route::post('/register', function (Request $request){
	$request->validate([
		'name' => 'required|string|max:255',
		'email' => 'required|email|unique:users',
		'password' => 'required|string|min:8|confirmed'
	]);

	$user = User::create([
		'name' => $request->name,
		'email' => $request->email,
		'password' => bcrypt($request->password),
	]);

	Auth::login($user);

	return redirect('/records');

})->name('register');
