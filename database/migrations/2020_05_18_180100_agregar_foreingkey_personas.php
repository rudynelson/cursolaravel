<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarForeingkeyPersonas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('personas',function(Blueprint $table){
            $table->bigInteger('profesion_id')->unsigned()->after('id');
            $table->foreign('profesion_id')->references('id')->on('profesion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas',function(Blueprint $table){
            $table->dropForeign(['profesion_id']);
            $table->dropColumn('profesion_id');
        });
    }
}
