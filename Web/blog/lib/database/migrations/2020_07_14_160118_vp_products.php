<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VpProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vp_products', function (Blueprint $table) {
            $table->increments('prod_id');
            $table->string('prod_name');
            $table->string('prod_slug');
            $table->integer('prod_price');//gia
            $table->string('prod_img');
            $table->string('prod_warranty');//bao hanh
            $table->string('prod_accessories');
            $table->string('prod_condition');//tinh trang
            $table->string('prod_promotion');//khuyen mai
            $table->tinyInteger('prod_status');//trang thai
            $table->text('prod_description');//mieu ta
            $table->tinyInteger('prod_featured');//dac biet
            $table->integer('prod_cate')->unsigned();//khoa phu

            $table->foreign('prod_cate')
                  ->references('cate_id')
                  ->on('vp_categories')
                  ->onDelete('cascade')  ;


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
        Schema::dropIfExists('vp_products');
    }
}
