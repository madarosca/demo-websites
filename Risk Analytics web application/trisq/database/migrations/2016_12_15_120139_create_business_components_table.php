<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_components', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name',255);
            $table->char('category',32)->comment = "Processing|Reference Data|Applications";
            $table->text('description',255);
            $table->decimal('order_seq', 10,2)->comment = "Order sequence";
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
        Schema::dropIfExists('business_components');
    }
}
