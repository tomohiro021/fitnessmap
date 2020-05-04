<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gym_contents', function (Blueprint $table) {
            $table->id();
            $table->integer('gym_id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('zip_code');
            $table->string('address');
            $table->string('address1');
            $table->string('address2');
            $table->decimal('lat');
            $table->decimal('lng');
            $table->text('summary');
            $table->text('detail');
            $table->integer('status');
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
        Schema::dropIfExists('gym_contents');
    }
}
