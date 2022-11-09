<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('payslip_id');
            $table->unsignedBigInteger('vacation_id');
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('name');
            $table->date('birth_date');
            $table->date('date_of_hire');
            $table->string('address');
            $table->string('sex');
            $table->string('marital_status');
            $table->string('email');
            $table->string('phone_number');
            $table->integer('bank_account');
            $table->integer('cnss_number');

            $table->foreign('company_id')->references('id')->on('compagnies');
            $table->foreign('payslip_id')->references('id')->on('payslips');
            $table->foreign('vacation_id')->references('id')->on('vacations');
            $table->foreign('bank_id')->references('id')->on('banks');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('employees');
    }
}
