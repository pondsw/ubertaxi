<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('discounts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('code');
          $table->integer('amount');
          $table->integer('promotion_id')->unsigned();
          $table->integer('limit_number_of_use');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('promotion_id')
                ->references('id')
                ->on('promotions');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::disableForeignKeyConstraints();
      Schema::dropIfExists('discounts');
      Schema::enableForeignKeyConstraints();
    }
}
