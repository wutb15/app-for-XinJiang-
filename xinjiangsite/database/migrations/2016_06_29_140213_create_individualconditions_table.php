<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualconditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individualconditions', function (Blueprint $table) {
            $table->string('Idcardid',19);
            $table->primary('Idcardid');
            $table->date('birthday');
            $table->decimal('income');
            $table->enum('sex',['male','female']);
            $table->integer('home_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('individualconditions');
    }
}
