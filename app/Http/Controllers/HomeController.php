<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Link;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::with('category')
            ->where('est_publie', true)
            ->latest()
            ->get();
        $link = Link::all()->first();
        // dd($link->phone_);

        return view('public.index', compact('services', 'link'));
    }

    public function show(Service $service)
    {
        $link = Link::all()->first();
        return view('public.show', compact('service', 'link'));
    }
}
