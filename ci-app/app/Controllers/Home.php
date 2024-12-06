<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Userinterface',
            'content' => 'new_upload', 
        ];

        return view('main_layout', $data);
    }

}
