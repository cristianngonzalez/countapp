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
        Schema::table('expense', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('name' , 255);
            $table->float('amount');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->interger('currency_id');
            $table->integer('payment_method_id');
            $table->date('date');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expense', function (Blueprint $table) {
            //
        });
    }
};
