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
        Schema::create('support_texts', function (Blueprint $table) {
            $table->id();
            $table->text('country_title')->nullable();
            $table->text('country_title_2')->nullable();
            $table->text('description')->nullable();
            $table->text('get_in_touch')->nullable();
            $table->text('side_description')->nullable();
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
        Schema::dropIfExists('support_texts');
    }
};
