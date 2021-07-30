<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\SkillsModel;
use App\Models\UserModel;

class SkillsController extends Controller
{

    public function index()
    {   
       $skills = SkillsModel::userSkills(7);
       View::render('skills/skills.view', [
           'skills' => $skills,
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

