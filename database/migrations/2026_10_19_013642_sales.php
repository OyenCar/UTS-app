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
        //
        Schema::create('Sales', function (Blueprint $table) {
            $table->char('purchase_number',8)->primary();
            $table->date('date_of_purchase');
            $table->integer('customer_id');
            $table->char('item_code',8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Sales');
    }
};
