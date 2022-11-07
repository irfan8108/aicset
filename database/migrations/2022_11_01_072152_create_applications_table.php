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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('app_no');
            $table->string('fee');

            $table->string('name');
            $table->string('aadhaar');
            $table->string('dob');
            $table->enum('gender',['Male','Female','Other']);
            $table->string('category');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('pwd',3)->default(0);
            $table->string('alternate_contact')->nullable();
            $table->string('whatsapp')->nullable();
            $table->enum('residence', ['Rural', 'Urban'])->nullable();

            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('state');
            $table->string('district');
            $table->integer('pincode');
            $table->string('landmark')->nullable();
            
            $table->string('intermediate_qualification_status');
            $table->string('intermediate_board_name');
            $table->string('intermediate_school_name');
            $table->string('intermediate_passing_year')->nullable();
            $table->string('intermediate_total_marks')->nullable();
            $table->string('intermediate_obtained_marks')->nullable();
            $table->string('intermediate_percentage_mark')->nullable();

            $table->string('matric_board_name');
            $table->string('matric_school_name');
            $table->string('matric_passing_year')->nullable();
            $table->string('matric_total_marks')->nullable();
            $table->string('matric_obtained_marks')->nullable();
            $table->string('matric_percentage_mark')->nullable();

            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('family_members')->nullable();
            $table->string('monthly_income');
            $table->string('is_govt_department')->nullable();

            $table->string('how_hear_about')->nullable();
            
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('applications');
    }
};
