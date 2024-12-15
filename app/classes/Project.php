<?php


namespace App\classes;


class Project
{
    public static $projects = [];

    public static function getAllProject()
    {
        self::$projects = [
            0=>[
                'id'=> 1,
                'project_title'=> "Calculator Project",
                'project_image'=> "assets/img/calculator program.png",
                'project_description'=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut illum ipsa iure laboriosam nostrum omnis quasi quis sapiente sed?",
                'project_page' => 'calculator'
            ],

            1=>[
                'id'=> 2,
                'project_title'=> "Sum Calculator Project",
                'project_image'=> "assets/img/sum calculator program.png",
                'project_description'=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut illum ipsa iure laboriosam nostrum omnis quasi quis sapiente sed?",
                'project_page'=>'sum_calculator'
            ],

            2=>[
                'id'=> 3,
                'project_title'=> "Full Name Project",
                'project_image'=> "assets/img/fullname.png",
                'project_description'=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aut illum ipsa iure laboriosam nostrum omnis quasi quis sapiente sed?",
                'project_page' => 'fullname'
            ]
        ];

        return self::$projects;
    }


}