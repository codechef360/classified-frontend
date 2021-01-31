<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('sub_category_id');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('area_id');
            $table->unsignedInteger('package_id');
            $table->string('title');
            $table->text('description');
            $table->double('price')->default(0)->comment('price of item');
            $table->tinyInteger('negotiable')->default(0)->comment('0=no, 1=yes');
            $table->string('featured_image');
            $table->string('slug');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=pending, 1=in-progress, 2=expired, 3=declined');
            $table->unsignedInteger('view_counter')->default(0);
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
        Schema::dropIfExists('ads');
    }
}
