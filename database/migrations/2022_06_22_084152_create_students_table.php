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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('exam_roll');
            $table->date('dob');
            $table->string('adhaar_no')->nullable();
            $table->string('fName');
            $table->string('mName');
            $table->string('gender');
            $table->string('school_name');
            $table->string('jac_code');
            $table->string('center');
            $table->string('centerDist');
            $table->string('centerDistCode');
            $table->string('centerBlock');
            $table->string('OMRSRL_paper_1')->nullable();
            $table->string('OMRSRL_paper_2')->nullable();
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
        Schema::dropIfExists('students');
    }
};
