<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnedVoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('owned_vouchers', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->integer('voucher_id')->unsigned();
          $table->string('code')->unique();
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('user_id')
                ->references('id')
                ->on('users');

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
      Schema::dropIfExists('owned_vouchers');
      Schema::enableForeignKeyConstraints();
    }
}
