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
        Schema::create('our_services', function (Blueprint $table) {
            $table->id();
            $table->text('para1');
            $table->text('para2');
            $table->text('para3');
            $table->text('para4');
            $table->text('para5');
            $table->string('img1');
            $table->string('img2');
            $table->text('homepara1');
            $table->text('homepara2');
            $table->text('profilepara1');
            $table->text('profilepara2');
            $table->text('contactpara1');
            $table->text('contactpara2');
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
        Schema::dropIfExists('our_services');
    }
};
