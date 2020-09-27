<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGachaCapsuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gacha_capsule', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gacha_machine_id')->unsigned();
            $table->foreign('gacha_machine_id')->references('id')->on('gacha_machine');
            $table->string('skype_id');
            $table->string('name');
            $table->string('bio');
            $table->timestamps();
            $table->string('password')->nullable();

            $table->unique(['gacha_machine_id', 'skype_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gacha_capsule');
    }
}
