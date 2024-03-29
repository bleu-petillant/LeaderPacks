<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('header_video')->nullable();
            $table->string('header_image')->nullable();
            $table->string('header_image_alt')->nullable();
            $table->string('header_text',255)->nullable();
            $table->longText('inovation_text')->nullable();
            $table->integer('first_number')->nullable()->default(0);
            $table->integer('second_number')->nullable()->default(0);
            $table->integer('third_number')->nullable()->default(0);
            $table->longText('about_text')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_image_alt')->nullable();
            $table->longText('product_text')->nullable();
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
        Schema::dropIfExists('home_pages');
    }
}
