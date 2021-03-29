<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_pages', function (Blueprint $table) {
            $table->id();
            $table->string('product_text')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->longText('technologie_text')->nullable();
            $table->longText('innovation_text')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_pages');
    }
}
