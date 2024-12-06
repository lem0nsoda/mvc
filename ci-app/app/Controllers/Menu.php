<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function showContent()
    {
        $data['title'] = 'New Upload';
        return view('showContent', $data);
    }

    public function showAllContent()
    {
        $data['title'] = 'All Content';
        return view('showAllContent', $data);
    }
}
