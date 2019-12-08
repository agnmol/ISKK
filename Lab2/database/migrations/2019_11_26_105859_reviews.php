<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reviews extends Migration
{

    public $tableName = 'atsiliepimai';
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('zvaigzdutes');
            $table->text('komentaras')->nullable();
            $table->timestamp('data');
            $table->unsignedInteger('knyga');
            $table->string('vardas');

            $table->index(["knyga"], 'paliekamas_apie');

            $table->foreign('knyga', 'paliekamas_apie')
                ->references('id')
                ->on('knygos')
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
