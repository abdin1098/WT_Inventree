
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    if (session('logged_in')) {
        return redirect('/dashboard');
    }

    return redirect('/login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {

    if (
        $request->email == 'admin@test.com' &&
        $request->password == 'password123'
    ) {
        session(['logged_in' => true]);

        return redirect('/dashboard');
    }

    return back()->with('error', 'Wrong Email or Password');

})->name('login.submit');

Route::get('/dashboard', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }

    return view('dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    if (!session('logged_in')) {
        return redirect('/login');
    }

    return view('profile');
})->name('profile');


Route::post('/logout', function () {
    session()->forget('logged_in');
    return redirect('/login');
})->name('logout');
