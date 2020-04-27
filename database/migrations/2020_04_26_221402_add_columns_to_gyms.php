<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToGyms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gyms', function (Blueprint $table) {
            $table->string('name');
            $table->string('zip_code');
            $table->string('address1');
            $table->string('address2');
            $table->decimal('lat');
            $table->decimal('lng');
            $table->text('summary');
            $table->text('detail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gyms', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('zip_code');
            $table->dropColumn('address1');
            $table->dropColumn('address2');
            $table->dropColumn('lat');
            $table->dropColumn('lng');
            $table->dropColumn('summary');
            $table->dropColumn('detail');
        });
    }
}
