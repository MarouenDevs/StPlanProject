<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function(Blueprint $table)
		{
			$table->string('NPolice',255);
            $table->primary('NPolice','pk1');
            $table->date('getDate');
            $table->date('renderDate');
            $table->enum('state',array('D','P','C'));
            $table->integer('programme_id');
            $table->integer('prospect_id');
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
		Schema::drop('documents');
	}

}
