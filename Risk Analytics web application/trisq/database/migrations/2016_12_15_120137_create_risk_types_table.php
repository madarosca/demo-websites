<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiskTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risk_types', function (Blueprint $table) {
            $table->increments('id');
            $table->char('code', 32);
            $table->text('name',255);
            $table->text('category',255)->comment = "processing|financial|conduct";
            $table->text('description',255);
            $table->text('calculation_type')->comment = "criteria and items selection method";
            $table->timestamps();
        });

        //Schema::table('risk_types', function ($table) {
        //    $table->primary('code');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risk_types');
    }
}
