<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Categorie;
use App\Models\Link;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        $services = Service::with('category')
            ->where('est_publie', true)
            ->latest()
            ->get();
        $link = Link::all()->first();
        // dd($link->phone_);

        return view('public.index', compact('services', 'link', 'categories'));
    }

    public function show(Service $service)
    {
        $link = Link::all()->first();
        return view('public.show', compact('service', 'link'));
    }
}
