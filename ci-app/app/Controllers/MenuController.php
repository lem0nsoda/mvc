<?php

namespace App\Controllers;

class MenuController extends BaseController
{
    // Beispiel für "New Upload"
    public function showContent()
    {
        // Hier kannst du die Logik für "New Upload" hinzufügen
        $data['title'] = 'New Upload';
        return view('new_upload', $data); // 'new_upload' ist die View-Datei, die angezeigt wird
    }

    // Beispiel für "All Content"
    public function showAllContent()
    {
        $data['title'] = 'All Content';
        return view('all_content', $data); // 'all_content' ist eine View, die alle Inhalte anzeigt
    }

    // Weitere Methoden können für die anderen Menüpunkte hinzugefügt werden
}
