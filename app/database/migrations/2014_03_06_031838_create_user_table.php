<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id');
			$table->string('username');
			$table->string('email');
			$table->string('password');
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
		Schema::dropIfExists("user");
	}

}

// <img src="http://www.zawgyimart.com/img/micro_ads.png" width="200" alt=" "  height="183">
// <div>
  //      <a href="https://www.zawgyimart.com/adata-product.html"><img src="https://www.zawgyimart.com/img/mc.png" alt=" "  /></a>
   //</div>