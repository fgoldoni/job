<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'jobs', function (Blueprint $table) {
                $table->increments('id');

                $table->string('name');
                $table->longText('content')->nullable();
                $table->boolean('online')->default(false);
                $table->integer('user_id')->unsigned()->index();
                $table->integer('company_id')->unsigned()->index();

                $table->string('logo')->nullable();

                $table->timestamps();
            }
        );

        Schema::table(
            'jobs', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
