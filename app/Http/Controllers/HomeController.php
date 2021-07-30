<?php

namespace App\Http\Controllers;

use App\Libraries\View;
use App\Models\EducationModel;
use App\Models\UserModel;
use App\Models\SkillsModel;
use App\Models\HobbiesModel;
use App\Models\EmploymentModel;

class HomeController {

    public function index()
    { 
        $user = UserModel::get(1);
        $educations = EducationModel::userEducation(1);
        $skills = SkillsModel::userSkills(7);
        $hobbies = HobbiesModel::userHobbies(1);
        $employment = EmploymentModel::userEmployment(1);
        return View::render('home.view', [
            'user'          => $user,
            'educations'    => $educations,
            'skills'        => $skills,
            'hobbies'       => $hobbies,
            'employment'    => $employment,

        ]);
    }
}
