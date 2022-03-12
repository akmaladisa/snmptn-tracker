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
            $table->int("matematika");
            $table->int("b-inggris");
            $table->int("b-indonesia");
            $table->int("kimia");
            $table->int("fisika");
            $table->int("biologi");
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
