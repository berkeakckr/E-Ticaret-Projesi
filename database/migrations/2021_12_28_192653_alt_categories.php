<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alt_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ust_id');
            $table->string('title');
            $table->string('slug');
            $table->longText('image')->nullable();
            $table->foreign('ust_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('alt_categories');
    }
}
