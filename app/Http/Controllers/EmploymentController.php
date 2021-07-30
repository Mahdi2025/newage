<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\EmploymentModel;
use App\Models\UserModel;

class EmploymentController extends Controller
{

    public function index()
    {   
        $employment = EmploymentModel::userEmployment(1);
        
        View::render('employment/employment.view', [
            'employment'=> $employment,
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

