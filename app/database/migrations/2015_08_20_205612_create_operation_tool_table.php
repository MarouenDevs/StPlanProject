<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationToolTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operation_tool', function(Blueprint $table)
		{
			$table->integer('operation_id');
            $table->integer('tool_id');
            $table->primary(array('operation_id','tool_id'),'pk2');
            $table->float('qt');

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
		Schema::drop('tools');
	}

}
