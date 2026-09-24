<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function index()
    {
        return view('Website.contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'services' => [
                'required',
                'array',
                'min:1',
            ],
            'services.*' => [
                'required',
                'string',
                Rule::in([
                    'website-development',
                    'ecommerce-development',
                    'web-application',
                    'laravel-development',
                    'react-development',
                    'seo',
                    'digital-marketing',
                    'social-media-marketing',
                    'google-ads',
                    'ui-ux-design',
                ]),
            ],
            'message' => 'required|string|max:5000',
        ]);

        $validated['status'] = 'new';

        ContactMessage::create($validated);

        return redirect()
            ->route('contact.index')
            ->with('success', 'Thank you for contacting us. We will get back to you shortly.');
    }
}