<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_table', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('file_name');
            $table->string('project_name');
            $table->string('project_lead_name');
            $table->string('file_description');
            $table->string('share_type');
            $table->string('stored_file_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files_table');
    }
}
