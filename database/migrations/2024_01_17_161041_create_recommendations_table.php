<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->notNullable();
            $table->string('category')->notNullable();
            $table->string('budget')->notNullable();
            $table->text('purpose')->notNullable();
            $table->unsignedBigInteger('product_id')->notNullable();
            $table->text('message')->nullable();
            $table->timestamps();

            //foreign keys
            $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
