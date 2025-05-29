<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Service;
use App\Models\Link;
use App\Models\About;
class ContactController extends Controller
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
        $testimonials = Testimonial::where('is_visible', true)->get();

        return view('public.contact',
            compact('services', 'link', 'links', 'categories',
            'phones', 'whatsapps', 'adresses', 'mails', 'testimonials')
        );
    }

    public function service()
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

        return view('public.service',
            compact('services', 'link', 'links', 'categories',
            'phones', 'whatsapps', 'adresses', 'mails',)
        );
    }

    public function about()
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

        return view('public.about',
            compact('services', 'link', 'links', 'categories', 'abouts',
            'phones', 'whatsapps', 'adresses', 'mails', 'testimonials')
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Ici vous pouvez ajouter la logique pour envoyer l'email ou sauvegarder le message
        Message::create([
            'fullname'=> $validated['name'],
            'email'=> $validated['email'],
            'sujet'=> $validated['subject'],
            'message'=> $validated['message'],
           ]);

        // Envoi du message de confirmation
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès, nous vous répondrons dans les plus brefs délais.');

    }

    public function comment(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // dd($request->service);

        // Ici vous pouvez ajouter la logique pour envoyer l'email ou sauvegarder le message
        Testimonial::create([
            'name'=> $validated['name'],
            'email'=> $validated['email'],
            'service_id'=> $request->service,
            'comment'=> $validated['message'],
            'is_visible' => true
        ]);

        // Envoi du message de confirmation
        return redirect()->back()->with('success', 'Commentaire posté avec succès!');

    }

}
