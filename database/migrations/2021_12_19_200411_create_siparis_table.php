<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiparisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siparis', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('sepet_id')->unsigned()->unique();
            $table->decimal('siparis_tutari',5 ,4);
            $table->string('durum',30)->nullable();
            $table->integer('adet');
            $table->string('banka',20)->nullable();
            $table->integer('taksit_sayisi')->nullable();

            $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();

            $table->foreign('sepet_id')->references('id')->on('sepet')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siparis');
    }
}
