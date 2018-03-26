<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('salon_id')->unsigned();
			$table->string('first_name');
			$table->string('second_name');
			$table->integer('age')->unsigned();
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('town');
			$table->string('postcode');
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('mobile');
			$table->string('current_emp');
			$table->string('in_salon');
			$table->string('salon_name')->nullable();
			$table->string('qualification_school');
			$table->string('qualification_hair');
			$table->integer('cutting')unsigned();
			$table->integer('styling')unsigned();
			$table->integer('colouring')unsigned();
			$table->integer('men')unsigned();
			$table->integer('extensions')unsigned();
			$table->integer('chem_straightening')unsigned();
			$table->integer('brazil_blow')unsigned();
			$table->integer('hair_up')unsigned();
			$table->text('about');
			$table->text('why_hairdressing');
			$table->text('why_us');
			$table->integer('quality')unsigned()->nullable();
			$table->integer('contact_status')unsigned()->nullable();
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
        Schema::drop('apprentices');
    }
}
