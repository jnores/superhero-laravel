<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperherosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('superheros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nickname')->unique();
			$table->string('real_name');
			$table->string('origin_description');
			$table->string('superpowers');
			$table->string('catch_phrase');
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
		Schema::drop('superheros');
	}

}
