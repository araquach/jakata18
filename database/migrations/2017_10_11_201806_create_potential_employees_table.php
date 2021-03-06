<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotentialEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potential_employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salon')->unsigned();
            $table->string('full_name');
            $table->string('position');
            $table->string('mobile');
            $table->string('status')->nullable();
            $table->text('comment')->nullable();
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
        Schema::drop('potential_employees');
    }
}
