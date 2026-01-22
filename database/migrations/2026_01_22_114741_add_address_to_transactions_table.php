<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('street')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
        });
    }

    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn(['street','rt_rw','city','postal_code']);
        });
    }
};
