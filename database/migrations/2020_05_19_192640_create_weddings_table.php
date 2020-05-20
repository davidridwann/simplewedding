<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('groom');
            $table->string('bride');
            $table->dateTime('wedding_date');
            $table->string('hero_image');
            $table->text('love_story');
            $table->string('love_story_image');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->string('wedding_info');
            $table->dateTime('ceremony_date');
            $table->string('ceremony_place');
            $table->string('ceremony_address');
            $table->dateTime('reception_date');
            $table->string('reception_place');
            $table->string('reception_address');
            $table->dateTime('party_date');
            $table->string('party_place');
            $table->string('party_address');
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
        Schema::dropIfExists('weddings');
    }
}
