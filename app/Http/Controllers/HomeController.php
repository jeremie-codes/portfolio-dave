<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Categorie;
use App\Models\Link;
use App\Models\Pricing;
use App\Models\Testimonial;
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
        $mails = Link::where('type', 'email')->get();
        $phones = Link::where('type', 'phone')->get();
        $facebook = Link::where('type', 'facebook')->first();
        $instagram = Link::where('type', 'instagram')->first();
        $twitter = Link::where('type', 'twitter')->first();
        $adresses = Link::where('type', 'address')->get();
        $whatsapps = Link::where('type', 'whatsapp')->get();

        // dd($phones->get()->first());

        $link = [
            'email' => $mails->first()->data ?? null,
            'phone' => $phones->first()->data ?? null,
            'facebook' => $facebook->data ?? null,
            'instagram' => $instagram->data ?? null,
            'twitter' => $twitter->data ?? null,
            'address' => $adresses->first()->data ?? null,
            'whatsapp' => $whatsapps->first()->data ?? null,
        ];

        $links = Link::all();
        $video = Video::all()->last();

        $pricings = Pricing::all();
        $testimonials = Testimonial::where('is_visible', true)->get();

        $abouts = About::all();

        return view('public.index',
            compact('services', 'link', 'links', 'categories', 'video', 'abouts',
            'pricings', 'phones', 'whatsapps', 'adresses', 'mails', 'testimonials')
        );
    }

    public function show(Service $service)
    {
        $link = Link::all()->first();
        $services = Service::where('id', '!=', $service->id)->get();
        $comments = Testimonial::where('service_id', $service->id)->where('is_visible', true)->latest()->paginate(10);

        return view('public.show', compact('service', 'services', 'link', 'comments'));
    }

}
