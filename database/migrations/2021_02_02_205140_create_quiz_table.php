<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('css_quiz', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->double('Score', 5,2);
			$table->double('difficulty', 3,2)->nullable();
			$table->longText('decription')->nullable();
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('css_quiz');
    }
}
