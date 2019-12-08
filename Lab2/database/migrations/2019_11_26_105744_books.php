<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Books extends Migration
{
    public $tableName = "knygos";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('pavadinimas');
            $table->text('aprasymas');
            $table->date('data');
            $table->unsignedInteger('autorius');
            $table->integer('puslapiai');

            //    $table->primary('id');
            $table->foreign('autorius','parasyta')
                ->references('id')
                ->on('autoriai')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
