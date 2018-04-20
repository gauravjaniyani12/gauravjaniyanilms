<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student', function(Blueprint $table)
		{
            $table->string('general_register_number')->nullable();
            $table->string('uid_number')->nullable();
            $table->string('adhar_card_number')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student', function(Blueprint $table)
		{
            $table->dropColumn('general_register_number');
            $table->dropColumn('uid_number');
            $table->dropColumn('adhar_card_number');
		});
    }
}
