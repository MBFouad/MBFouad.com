<?php

namespace App\Http\Controllers;

use App\Models\EducationHistory;
use App\Models\WorkExperiences;
use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\Paragraphs;


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $paragraphs = Paragraphs::getParagraphs();
        $educations = EducationHistory::all();
        $experiences = WorkExperiences::orderBy('start_date')->get();

        return view('home.index', compact('paragraphs','educations','experiences'));

    }
}
