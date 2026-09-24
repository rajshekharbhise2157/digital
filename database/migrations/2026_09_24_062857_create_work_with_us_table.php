<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('work_with_us', function (Blueprint $table) {
            $table->id();
            $table->string('service_type');
            $table->string('name');
            $table->string('company_name')->nullable();
            $table->string('email');
            $table->string('phone', 20);
            $table->string('website')->nullable();
            $table->string('budget')->nullable();
            $table->string('marketing_service')->nullable();
            $table->string('target_location')->nullable();
            $table->string('target_audience')->nullable();
            $table->string('monthly_marketing_budget')->nullable();
            $table->text('business_goals')->nullable();
            $table->string('website_type')->nullable();
            $table->string('technology')->nullable();
            $table->unsignedInteger('number_of_pages')->nullable();
            $table->string('domain_hosting')->nullable();
            $table->string('design_preference')->nullable();
            $table->text('required_features')->nullable();
            $table->text('project_description')->nullable();
            $table->string('contact_method')->nullable();
            $table->string('status')->default('pending');
            $table->timestamp('contacted_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('work_with_us');
    }
};