<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer("matematika");
            $table->integer("binggris");
            $table->integer("bindonesia");
            $table->integer("kimia");
            $table->integer("fisika");
            $table->integer("biologi");
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
        Schema::dropIfExists('ipa');
    }
}
