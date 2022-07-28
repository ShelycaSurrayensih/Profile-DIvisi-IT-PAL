<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdepartment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adepartments', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->text("kedudukan");
            $table->string("organisasi1");
            $table->string("organisasi2");
            $table->text("tugas1");
            $table->text("tugas2");
            $table->string("fungsi1");
            $table->string("fungsi2");
            $table->string("fungsi3");
            $table->string("fungsi4");
            $table->string("fungsi5");
            $table->string("fungsi6");
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
        Schema::dropIfExists('adepartments');
    }
}
