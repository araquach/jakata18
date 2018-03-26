<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email');
            $table->string('mobile');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('town');
            $table->string('postcode');
            $table->boolean('regular');
            $table->string('texture');
            $table->string('condition');
            $table->integer('cut_spend')->unsigned()
            $table->integer('colour_spend')->unsigned();
            $table->boolean('opt_out')->nullable();
            $table->string('contact_status')->nullable();
            $table->integer('prospect_type')->unsigned();
            $table->dateTime('products_sent');
            $table->dateTime('message_sent');
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
        Schema::drop('prospects');
    }
}
