<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Categorie;
use App\Models\Link;
use App\Models\Testimonial;
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
            'phone2' => $phones->last()->data ?? null,
            'facebook' => $facebook->data ?? null,
            'instagram' => $instagram->data ?? null,
            'twitter' => $twitter->data ?? null,
            'address' => $adresses->first()->data ?? null,
            'whatsapp' => $whatsapps->first()->data ?? null,
        ];

        $links = Link::all();
        $abouts = About::all();

        // dd($abouts);
        $testimonials = Testimonial::where('is_visible', true)->get();

        return view('public.index',
            compact('services', 'link', 'links', 'categories', 'abouts',
            'phones', 'whatsapps', 'adresses', 'mails', 'testimonials')
        );
    }

    public function show(Service $service)
    {
        $links = Link::all()->first();
        $mails = Link::where('type', 'email')->get();
        $phones = Link::where('type', 'phone')->get();
        $facebook = Link::where('type', 'facebook')->first();
        $instagram = Link::where('type', 'instagram')->first();
        $twitter = Link::where('type', 'twitter')->first();
        $adresses = Link::where('type', 'address')->get();
        $whatsapps = Link::where('type', 'whatsapp')->get();
        $link = [
            'email' => $mails->first()->data ?? null,
            'phone' => $phones->first()->data ?? null,
            'phone2' => $phones->last()->data ?? null,
            'facebook' => $facebook->data ?? null,
            'instagram' => $instagram->data ?? null,
            'twitter' => $twitter->data ?? null,
            'address' => $adresses->first()->data ?? null,
            'whatsapp' => $whatsapps->first()->data ?? null,
        ];
        $services = Service::where('id', '!=', $service->id)->get();
        $comments = Testimonial::where('service_id', $service->id)->where('is_visible', true)->latest()->paginate(10);
        // dd($comments);
        return view('public.show', compact('service', 'services', 'links', 'link', 'comments'));
    }

}
