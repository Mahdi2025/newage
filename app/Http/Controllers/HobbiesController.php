<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\HobbiesModel;
use App\Models\UserModel;

class HobbiesController extends Controller
{

    public function index()
    {   
       $hobbies = HobbiesModel::userHobbies(1);

       View::render('hobbies/hobbies.view', [
           'hobbies' => $hobbies,
       ]);
    }
    /**
     * Store a user record into the database
     */
    public function store()
    {
        
    }

    public function create()
    {
        
    }

    public function show()
    {

    }

    /**
     * Updates a user record into the database
     */
    public function update()
    {
        
    }

    /**
     * Archive a user record into the database
     */
    public function destroy(int $id)
    {

    }

}

