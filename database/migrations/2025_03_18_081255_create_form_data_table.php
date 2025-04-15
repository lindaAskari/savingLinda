<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('sales_expert'); // کارشناس فروش
            $table->integer('city_zone')->default(11); // منطقه شهری
            $table->string('visit_route'); // مسیر ویزیت
            $table->string('supervisor'); // سرپرست
            $table->string('purchase_manager_time'); // تایم حضور مسول خرید
            $table->string('name_of_the_customer');
            $table->string('activity');
            $table->string('name_of_the_store');
            $table->string('phone_number');
            $table->string('address');
            $table->string('explanation');
            $table->string('selected_option'); // گزینه انتخابی از لیست
            $table->boolean('purchase_made')->default(false); // خرید انجام شد
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
