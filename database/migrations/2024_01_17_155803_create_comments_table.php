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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment');
            $table->unsignedBigInteger('product_id')->notNullable();
            $table->unsignedBigInteger('customer_id')->notNullable();
            $table->tinyInteger('is_admin')->notNullable()->default(0);
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
        Schema::dropIfExists('comments');
    }
};
