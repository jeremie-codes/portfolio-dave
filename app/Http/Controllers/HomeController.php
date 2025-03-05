<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::with('category')
            ->where('est_publie', true)
            ->latest()
            ->get();

        return view('public.index', compact('services'));
    }
}
