<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactRequest;
use App\Mail\NotificationContactClient;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.pages.contact-us');
    }

    public function sendMail(SendContactRequest $request)
    {
        try {
            $newContact = new Contact();
            $newContact->name = $request->post('name');
            $newContact->email = $request->post('email');
            $newContact->phone = $request->post('phone');
            $newContact->business = $request->post('business');
            $newContact->message = $request->post('message');
            if ($newContact->save()) {
                $data = $request->all();
                Mail::to('qgaray.j@gmail.com', 'Puma Gold Perú')->send(new NotificationContactClient($data));
            }
            return back()->with('success',
                '¡Gracias por Contactarnos! En breve uno de nuestros asesores se pondrá en contacto con usted');
        } catch (\Exception $e) {
            return back()->with('danger',
                'Ups! Algo algo anda mal.');
        }
    }
}
