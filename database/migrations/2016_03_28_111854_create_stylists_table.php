<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylistsTable extends Migration
{
    /**
     * Run the migrations
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('stylists', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('salon_id')->unsigned();
			$table->string('first_name');
			$table->string('second_name');
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('town');
			$table->string('postcode');
			$table->string('email');
			$table->string('phone')->nullable();
			$table->string('mobile');
			$table->string('current_emp');
			$table->string('current_emp_des');
			$table->string('school_qual');
			$table->string('qual_non_hair')->nullable();
			$table->integer('adex_stock')->nullable();
			$table->integer('adex_manage')->nullable();
			$table->integer('adex_train')->nullable();
			$table->integer('adex_reception')->nullable();
			$table->integer('adex_marketing')->nullable();
			$table->integer('adex_cservice')->nullable();
			$table->string('experience');
			$table->string('current_position');
			$table->string('client_base');
			$table->string('qualifications');
			$table->integer('cutting_skills')->unsigned();
			$table->integer('colour_knowledge')->unsigned();
			$table->integer('colour_skills')->unsigned();
			$table->integer('men')->unsigned();
			$table->integer('hair_up')unsigned();
			$table->integer('extensions_weave')unsigned();
			$table->integer('extensions_other')unsigned();
			$table->integer('chem_straighten')unsigned();
			$table->integer('braz_blow')unsigned();
			$table->string('awards')->nullable();
			$table->text('about_you');
			$table->text('why_hairdressing');
			$table->text('why_us');
			$table->integer('quality')->unsigned()->nullable();
			$table->integer('contact_status')->unsigned()->nullable();
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
        Schema::drop('stylists');
    }
}