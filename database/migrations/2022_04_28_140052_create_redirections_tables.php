<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedirectionsTables extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('redirections')) {
            Schema::create('redirections', function (Blueprint $table) {
                createDefaultTableFields($table);

                $table
                    ->string('from', 1000)
                    ->index()
                    ->nullable();

                $table
                    ->string('to', 1000)
                    ->index()
                    ->nullable();

                $table->integer('status_code')->default(301);
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('redirections');
    }
}
