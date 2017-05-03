<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedeemedDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('redeemed_discounts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('discount_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->date('redeem_date');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('user_id')
                ->references('id')
                ->on('users');

          $table->foreign('discount_id')
                ->references('id')
                ->on('discounts');
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
      Schema::dropIfExists('redeemed_discounts');
      Schema::enableForeignKeyConstraints();
    }
}
