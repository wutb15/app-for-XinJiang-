<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyconditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familyconditions', function (Blueprint $table) {
            $table->increments('family_id');
            $table->string('family_name',60)->default('');
            $table->string('family_location')->default('');
            $table->decimal('family_income')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('familyconditions');
    }
}
