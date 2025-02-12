<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }
    public function submitForm(ContactFormRequest $request)
    {
        $validated = $request->validated();
        return 'Form submitted successfully!';
    }
}
