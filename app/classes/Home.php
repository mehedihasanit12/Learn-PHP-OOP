<?php

namespace App\classes;

use App\classes\Blog;
use App\classes\Project;

class Home
{
    public $blogs,$blog,$projects;

    public function index()
    {
        $this->blogs = Blog::getAllBlog();
        return view('home', ['blogs'=> $this->blogs]);
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        $this->projects = Project::getAllProject();
        return view('portfolio',['project'=>$this->projects]);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function details($id)
    {
        $this->blog = Blog::getBlogById($id);
        return view('details',['blog' => $this->blog]);
    }

    public function calculator()
    {
        return view('calculator_project');
    }

    public function sum_calculator()
    {
        return view('sum_calculator');
    }
    
    public function fullname()
    {
        return view('fullname');
    }
}