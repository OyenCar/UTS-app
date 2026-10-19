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
        Schema::create('Companies', function (Blueprint $table) {
            $table->id('company_id');
            $table->char('company_name',255);
            $table->char('headquarters_phone_number',12); //0823 2828 0150
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Companies');
    }
};
