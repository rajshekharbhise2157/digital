<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkWithUs extends Model
{
    protected $table = 'work_with_us';

    protected $fillable = [
        'service_type',
        'name',
        'company_name',
        'email',
        'phone',
        'website',
        'budget',
        'marketing_service',
        'target_location',
        'target_audience',
        'monthly_marketing_budget',
        'business_goals',
        'website_type',
        'technology',
        'number_of_pages',
        'domain_hosting',
        'design_preference',
        'required_features',
        'project_description',
        'contact_method',
        'status',
        'contacted_at',
    ];

    protected $casts = [
        'contacted_at' => 'datetime',
    ];
}