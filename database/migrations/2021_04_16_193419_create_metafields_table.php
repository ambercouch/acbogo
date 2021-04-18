<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetafieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metafields', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //$table->integer('user_id')->unsigned()->index();
            $table->foreignId('user_id')->constrained();
            //$table->integer('resource_id')->unsigned()->index();
            $table->foreignId('resource_id')->constrained();
            $table->string('metafield_name');
            $table->string('metafield_key');
            $table->string('metafield_namespace');
            //$table->integer('metafield_type_id')->unsigned()->index();
            $table->foreignId('metafield_type_id')->constrained();
            $table->string('metafield_value');
            $table->string('metafield_label');
            $table->string('metafield_info');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metafields');
    }
}
