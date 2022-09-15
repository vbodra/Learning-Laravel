<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticingRelatedTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicing_related_tables', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->foreignId('car_brand_id')
                  ->constrained('practices')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('practicing_related_tables');
    }
}
