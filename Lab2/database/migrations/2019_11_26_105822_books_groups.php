<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksGroups extends Migration
{
    public $tableName = "knygos_grupes";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->unsignedInteger('grupe');
            $table->unsignedInteger('knyga');

            //$table->primary('grupe');

            $table->foreign('grupe','priklauso')
                ->references('id')
                ->on('grupes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('knyga','turi')
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
