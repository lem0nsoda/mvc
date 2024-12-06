<?php

namespace App\Controllers;

class Menu extends BaseController
{
    public function newContentUpload()
    {
        $data['title'] = 'New Upload';
        return view('newContentUpload', $data);
    }

    public function allContent()
    {
        $data['title'] = 'All Content';
        return view('allContent', $data);
    }

    public function allPlaylists()
    {
        $data['title'] = 'allPlaylists';
        return view('allPlaylists', $data);
    }

    public function allSchedules()
    {
        $data['title'] = 'allSchedules';
        return view('allSchedules', $data);
    }

    public function devices()
    {
        $data['title'] = 'devices';
        return view('devices', $data);
    }

    public function newPlaylist()
    {
        $data['title'] = 'newPlaylist';
        return view('newPlaylist', $data);
    }

    public function newSchedule()
    {
        $data['title'] = 'newSchedule';
        return view('newSchedule', $data);
    }

    public function statistic()
    {
        $data['title'] = 'statistic';
        return view('statistic', $data);
    }

    public function users()
    {
        $data['title'] = 'users';
        return view('users', $data);
    }

}
