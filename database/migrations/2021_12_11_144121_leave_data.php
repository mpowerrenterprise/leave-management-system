<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LeaveData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('leave_data', function (Blueprint $table) {

        $table->increments('auto_id');
        $table->string('staff_id');
        $table->string('reason',5000);
        $table->string('date_of_leave');
        $table->string('date_of_request');
        $table->string('remark',5000);
        $table->string('approval_status');

      });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
