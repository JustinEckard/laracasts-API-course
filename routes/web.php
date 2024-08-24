<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs',function(){
    return view('jobs',[
        'jobs' => [
        [ 
            'id' => 1,
            'title' => 'Director',
            'salary' => 'R200 000',
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => 'R300 000',
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => 'R10 000',
        ],
    ]
    ]);
});

Route::get('/jobs/{id}',function($id){
    dd($id);
    return view('');
});

Route::get('/contact', function(){
    return view('contact');
});

