<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Categorie;
use App\Models\Link;
use App\Models\Pricing;
use App\Models\Video;
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
        $mail = Link::where('type', 'email')->first();
        $phone = Link::where('type', 'phone')->first();
        $facebook = Link::where('type', 'facebook')->first();
        $instagram = Link::where('type', 'instagram')->first();
        $twitter = Link::where('type', 'twitter')->first();
        $address = Link::where('type', 'address')->first();
        $whatsapp = Link::where('type', 'whatsapp')->first();

        $link = [
            'email' => $mail->data ?? null,
            'phone' => $phone->data ?? null,
            'facebook' => $facebook->data ?? null,
            'instagram' => $instagram->data ?? null,
            'twitter' => $twitter->data ?? null,
            'address' => $address->data ?? null,
            'whatsapp' => $whatsapp->data ?? null,
        ];

        $links = Link::all();
        $video = Video::all()->last();

        $pricings = Pricing::all();

        return view('public.index',
            compact('services', 'link', 'links', 'categories', 'video', 'pricings'));
    }

    public function show(Service $service)
    {
        $link = Link::all()->first();
        return view('public.show', compact('service', 'link'));
    }
}
