<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | CV',
            'page' => 'home',
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | CV',
            'page' => 'about',
        ];

        return view('about', $data);
    }

    public function experience()
    {
        $data = [
            'title' => 'Experience | CV',
            'page' => 'experience',
        ];

        return view('experience', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | CV',
            'page' => 'contact',
        ];

        return view('contact', $data);
    }
}