<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use App\Models\Material;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(){
        return view('themes',[
            'title' => 'Tema',
            'themes' => Theme::all()
        ]);
    }

    public function show(Request $request,Theme $theme, Material $material){
        $slug = $request->input('getlink');
        // dd($slug);
        return view('materials',[
            'title' => 'Materials',
            'materials' => $theme->material,
            'links' => $material->link
        ]);
    }

    public function getlink(Request $request){
        $slug = $request->input('getlink');
        dd($slug);
    }
}
