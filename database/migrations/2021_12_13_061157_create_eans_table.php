<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eans', function (Blueprint $table) {
            $table->id();
            $table->string('art');
            $table->string('title');
            $table->foreignId('category_id')->constrained('product_categories')->onDelete('cascade');
            $table->integer('VPE');
            $table->string('code_product');
            $table->string('code_VPE');
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
        Schema::dropIfExists('eans');
    }
}
