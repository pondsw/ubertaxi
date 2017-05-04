<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedeemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('redeemed_vouchers', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('owned_vouchers_id')->unsigned();
          $table->date('redeem_date');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('owned_vouchers_id')
                ->references('id')
                ->on('owned_vouchers');

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
      Schema::dropIfExists('redeemed_vouchers');
      Schema::enableForeignKeyConstraints();
    }
}
