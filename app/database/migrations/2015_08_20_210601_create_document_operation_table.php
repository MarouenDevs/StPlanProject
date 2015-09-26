<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentOperationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('document_operation', function(Blueprint $table)
		{
			$table->integer('operation_id');

            $table->string('document_NPolice');

            $table->primary(array('operation_id','document_NPolice'),'pk3');

            $table->dateTime('executed');
            $table->dateTime('rendred');
            $table->enum('state',array('D','P','C'));
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
		Schema::drop('document_operation');
	}

}
