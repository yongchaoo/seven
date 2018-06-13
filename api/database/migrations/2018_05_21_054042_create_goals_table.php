<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 45);
            $table->text('content');
            $table->boolean('status')->comment('1：完成，0：未完成')->default(0);
            $table->string('start_time', 45);
            $table->string('end_time', 45)->nullable();
            $table->text('sumup')->nullable();
            $table->integer('score')->nullable();
            $table->enum('type',['day_finish','period'])->default('day_finish');
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
        Schema::dropIfExists('goals');
    }
}
