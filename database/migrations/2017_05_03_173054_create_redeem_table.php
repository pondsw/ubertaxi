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
          $table->integer('user_id')->unsigned();
          $table->string('code');
          $table->integer('voucher_id')->unsigned();
          $table->date('redeem_date');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('user_id')
                ->references('id')
                ->on('users');
          $table->foreign('code')
                ->references('code')
                ->on('owned_vouchers');
          $table->foreign('voucher_id')
                ->references('id')
                ->on('vouchers');

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
