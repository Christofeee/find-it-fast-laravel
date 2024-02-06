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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNullable();
            $table->decimal('price', 10, 2)->notNullable()->default(0);
            $table->text('short_description')->notNullable()->default("Coming Soon! Stay tuned!");
            $table->text('long_description')->notNullable()->default("Coming Soon! Stay tuned!");
            $table->unsignedBigInteger('category_id')->notNullable();
            $table->timestamps();

            // Use Laravel's foreign key methods for consistency
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
