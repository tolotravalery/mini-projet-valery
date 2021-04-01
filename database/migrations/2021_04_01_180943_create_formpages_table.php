<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formpages', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->bigInteger('form_id')->unsigned()->index();
            $table->foreign('form_id')->references('id')->on('forms')->onDelete('cascade');
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
        Schema::dropIfExists('formpages');
    }
}
