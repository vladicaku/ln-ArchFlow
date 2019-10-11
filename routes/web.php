<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('{any?}', function (Request $request, $any = null) {
	// hardcoded for now
	if ($request->is('player')) {
		$viewName = 'player/player';
	} else if ($request->is('home')) {
		$viewName = 'home/home';
	} else {
		$viewName = 'player/player';
	}

	// do not ask why, see Accept header in Chrome and Postman
	if($request->header('Content-Type') == 'application/json') {
		$viewName = $viewName.'_json';
	} else if($request->prefers('text/html')) {
		$viewName = $viewName.'_html';
	}

	return view($viewName, ['id' => 123]);

	// if($request->wantsJson()) {
	// 	$viewName = $viewName.'_json';
	// } else if($request->prefers('text/html')) {
	// 	$viewName = $viewName.'_html';
	// }

	//return "Pero";

	//var_dump($request->format());
	//return $request->header('Content-Type') . "Vace";
	
})->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});
