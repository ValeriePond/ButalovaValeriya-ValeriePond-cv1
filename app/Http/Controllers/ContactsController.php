<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contacts;

class ContactsController extends Controller
{
    //

    public function contact(Request $request){
        Contacts::create([
            'name' => $request->name,
            'surename' => $request->surename,
            'email' => $request -> email,
            'photo' => $request ->photo
        ]);

        return back();
    }
}
