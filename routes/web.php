<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/dashboard', function () {
    $data_dummy = [
        [
            "id" => 1,
            "name" => "Babayaga",
            "location" => "Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810",
            "description" => "Babayaga is one of many recycle locations. Near a big cafe so that people can use Babayaga to recycle the trash, accept plastics and alumunium."
        ],
        [
            "id" => 2,
            "name" => "Haha Hoho",
            "location" => "MH Thamrin Boulevard 1100, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten 15811",
            "description" => "Haha Hoho, the best recycler in the malay, this machine is using 5 principles = Refuse, Reduce, Reuse, Repurpose, Recycle – that offers improvement to the environment."
        ],
    ];

    $volunteer_dummy = [
        [
            "id" => 1,
            "name" => "Vincent",
            "email" => "vincent@gmail.com",
            "date" => "09-10-2001",
            "phoneNum" => "08229988992"
        ],
        [
            "id" => 1,
            "name" => "Ferry",
            "email" => "ferry@gmail.com",
            "date" => "02-03-2001",
            "phoneNum" => "08998877663"
        ],
    ];

    return view('pages.dashboard', [
        "dummys" => $data_dummy,
        "volunteers" => $volunteer_dummy,
    ]);
});

Route::get('dummy/{id}', function ($id) {
    $data_dummy = [
        [
            "id" => 1,
            "name" => "Babayaga",
            "photo" => "dsadsada.jpg",
            "location" => "Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810",
            "description" => "Babayaga is one of many recycle locations. Near a big cafe so that people can use Babayaga to recycle the trash, accept plastics and alumunium."
        ],
        [
            "id" => 2,
            "name" => "Haha Hoho",
            "location" => "MH Thamrin Boulevard 1100, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten 15811",
            "description" => "Haha Hoho, the best recycler in the malay, this machine is using 5 principles = Refuse, Reduce, Reuse, Repurpose, Recycle – that offers improvement to the environment."
        ],
    ];

    $volunteer_dummy = [
        [
            "id" => 1,
            "name" => "Vincent",
            "email" => "vincent@gmail.com",
            "date" => "09-10-2001",
            "phoneNum" => "08229988992."
        ],
        [
            "id" => 1,
            "name" => "Vincent",
            "email" => "vincent@gmail.com",
            "date" => "09-10-2001",
            "phoneNum" => "08229988992."
        ],
    ];


    $new_dummy = [];
    foreach ($data_dummy as $dummy) {
        if ($dummy["id"] == $id) {
            $new_dummy = $dummy;
        }
    }
    return view('pages.recyclerDetail', [
        "dummy" => $new_dummy
    ]);
});

Route::get('/locations', function () {
    $data_dummy = [
        [
            "id" => 1,
            "name" => "Babayaga",
            "photo" => "dsadsada.jpg",
            "location" => "Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810",
            "description" => "Babayaga is one of many recycle locations. Near a big cafe so that people can use Babayaga to recycle the trash, accept plastics and alumunium."
        ],
        [
            "id" => 2,
            "name" => "Haha Hoho",
            "location" => "MH Thamrin Boulevard 1100, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten 15811",
            "description" => "Haha Hoho, the best recycler in the malay, this machine is using 5 principles = Refuse, Reduce, Reuse, Repurpose, Recycle – that offers improvement to the environment."
        ],
        [
            "id" => 1,
            "name" => "Babayaga",
            "photo" => "dsadsada.jpg",
            "location" => "Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810",
            "description" => "Babayaga is one of many recycle locations. Near a big cafe so that people can use Babayaga to recycle the trash, accept plastics and alumunium."
        ],
        [
            "id" => 2,
            "name" => "Haha Hoho",
            "location" => "MH Thamrin Boulevard 1100, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten 15811",
            "description" => "Haha Hoho, the best recycler in the malay, this machine is using 5 principles = Refuse, Reduce, Reuse, Repurpose, Recycle – that offers improvement to the environment."
        ],
        [
            "id" => 1,
            "name" => "Babayaga",
            "photo" => "dsadsada.jpg",
            "location" => "Jalan Scientia Boulevard Gading, Curug Sangereng, Serpong, Kabupaten Tangerang, Banten 15810",
            "description" => "Babayaga is one of many recycle locations. Near a big cafe so that people can use Babayaga to recycle the trash, accept plastics and alumunium."
        ],
        [
            "id" => 2,
            "name" => "Haha Hoho",
            "location" => "MH Thamrin Boulevard 1100, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten 15811",
            "description" => "Haha Hoho, the best recycler in the malay, this machine is using 5 principles = Refuse, Reduce, Reuse, Repurpose, Recycle – that offers improvement to the environment."
        ],
    ];

    return view('pages.locations', [
        "dummys" => $data_dummy,
    ]);
});

Route::get('/create', function () {
    return view('pages.create');
});

Route::get('/editRecycler', function () {
    return view('pages.editRecycler');
});

Route::get('/editVolunteer', function () {
    return view('pages.editVolunteer');
});