<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->integer("PARENT_ID");
            $table->integer("USER_ID");
            $table->string("PRODUCT_NAME");
            $table->integer("PRODUCT_QUANTITY");
            $table->integer("PRODUCT_PRICE");
            $table->string("DILIVARY_STATUS");
            $table->timestamp("CREATION_DATE")->nullable();
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
        Schema::dropIfExists('commandes');
    }
};
