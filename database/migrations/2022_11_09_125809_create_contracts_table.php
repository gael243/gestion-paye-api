<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profession_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('type_contract_id');
            $table->date('date_of_hire');
            $table->string('pay_frequency');
            $table->integer('base_salary');
            $table->boolean('active');

            $table->foreign('profession_id')->references('id')->on('professions');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('type_contract_id')->references('id')->on('type_contracts');
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
        Schema::dropIfExists('contracts');
    }
}
