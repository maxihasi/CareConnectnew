<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PublicController extends Controller
{
    public function aboutUs()
    {
        return Inertia::render('Public/Aboutus');
    }
    public function feedback()
    {
        return Inertia::render('Public/Feedback');
    }
    public function contact()
    {
        return Inertia::render('Public/Contact');
    }
    public function portfolio()
    {
        return Inertia::render('Public/Caregiver');
    }
}
