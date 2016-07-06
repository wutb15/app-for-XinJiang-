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
            $table->dateTime('birthday');
            $table->decimal('income');
            $table->string('name',60);
            $table->tinyInteger('sex');
            $table->integer('family_id')->unsigned();
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
