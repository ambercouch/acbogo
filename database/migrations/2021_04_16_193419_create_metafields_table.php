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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('resource_id')->constrained();
            $table->foreignId('metafield_group_id')->constrained();
            $table->string('metafield_name');
            $table->string('metafield_key');
            $table->string('metafield_namespace');
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
