<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\WorkWithUs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WorkWithUsController extends Controller
{
    public function index()
    {
        return view('Website.work-with-us.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_type' => [
                'required',
                Rule::in([
                    'digital_marketing',
                    'website_development',
                ]),
            ],
            'name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'website' => 'nullable|url|max:255',
            'contact_method' => 'required|in:phone,email,whatsapp',
            'budget' => 'nullable|string|max:100',
            'lead_source' => 'nullable|string|max:100',
            'additional_message' => 'nullable|string|max:5000',
            'marketing_service' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'target_location' => [
                'nullable',
                'string',
                'max:255',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'target_audience' => [
                'nullable',
                'string',
                'max:255',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'monthly_marketing_budget' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'marketing_goal' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'business_industry' => [
                'nullable',
                'string',
                'max:255',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'business_goals' => [
                'nullable',
                'string',
                'max:5000',
                Rule::requiredIf($request->service_type === 'digital_marketing'),
            ],
            'website_type' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
            'technology' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
            'number_of_pages' => [
                'nullable',
                'integer',
                'min:1',
                'max:1000',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
            'project_timeline' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
            'domain_hosting' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
            'design_preference' => [
                'nullable',
                'string',
                'max:100',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
            'required_features' => 'nullable|string|max:2000',
            'reference_website' => 'nullable|url|max:255',
            'project_description' => [
                'nullable',
                'string',
                'max:5000',
                Rule::requiredIf($request->service_type === 'website_development'),
            ],
        ]);

        $validated['status'] = 'pending';

        WorkWithUs::create($validated);

        return redirect()
            ->route('work-with-us.index')
            ->with('success', 'Thank you! Your requirement has been submitted successfully.');
    }
}