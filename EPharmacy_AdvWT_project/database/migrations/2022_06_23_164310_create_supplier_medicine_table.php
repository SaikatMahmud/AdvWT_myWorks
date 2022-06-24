<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierMedicineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_medicine', function (Blueprint $table) {

            $table->integer('s_id')->unsigned();
            $table->integer('m_id')->unsigned();

            $table->foreign('s_id')->references('supplier_id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('m_id')->references('medicine_id')->on('medicines')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_product');
    }
}
