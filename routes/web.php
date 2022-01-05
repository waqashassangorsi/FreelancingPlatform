<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
Route::get('/notavailable', function () {
    return view('notavailable');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/howitworks', function () {
    return view('howitworks');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/companygrid', function () {
    return view('companygrid');
});

Route::get('/insightsuser', function () {
    return view('insightsuser');
});
Route::get('/invoices', function () {
    return view('invoices');
});
Route::get('/managejobs', function () {
    return view('managejobs');
});
Route::get('/messages', function () {
    return view('messages');
});

Route::get('/ongoingsingle', function () {
    return view('ongoingsingle');
});
Route::get('/packages', function () {
    return view('packages');
});

Route::get('/proposals', function () {
    return view('proposals');
});
Route::get('/settings', function () {
    return view('settings');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/companysingle', function () {
    return view('companysingle');
});

Route::get('/canceljobs', function () {
    return view('canceljobs');
});

Route::get('/completejobs', function () {
    return view('completejobs');
});

Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/postjob', function () {
    return view('postjob');
});
Route::get('/saveitems', function () {
    return view('saveitems');
});

Route::get('/joblisting', function () {
    return view('joblisting');
});
Route::get('/jobproposal', function () {
    return view('jobproposal');
});


Route::get('/jobsingle', function () {
    return view('jobsingle');
});

Route::get('/userlisting', function () {
    return view('userlisting');
});

Route::get('/usersingle', function () {
    return view('usersingle');
});


Route::post('/registerusers', [UserController::class, 'registerusers']);