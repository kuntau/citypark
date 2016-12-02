<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('price');

            // application details
            $table->string('purpose');
            $table->string('location');
            $table->integer('quantity_lot')->default(1);
            $table->date('from_at');
            $table->date('until_at');
            $table->integer('duration')->default(1);

            // application verification process
            $table->boolean('paid')->default(false);
            $table->boolean('verified')->default(false);
            $table->boolean('approved')->default(false);
            $table->integer('approved_by')->nullable();
            $table->text('remark')->nullable();
            $table->string('proof')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
