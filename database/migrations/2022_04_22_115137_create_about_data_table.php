<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_data', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('para1')->nullable();
            $table->text('para2')->nullable();
            $table->text('lists')->nullable();
            // $table->text('list2')->nullable();
            // $table->text('list3')->nullable();
            // $table->text('list4')->nullable();
            $table->string('image')->nullable();
            $table->string('brochure')->nullable();
            $table->SoftDeletes();
    
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
        Schema::dropIfExists('about_data');
    }
};
