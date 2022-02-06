<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'companies', function (Blueprint $table) {
                $table->increments('id', true);

                $table->string('name');
                $table->longText('content')->nullable();
                $table->string('email')->unique()->nullable();
                $table->string('phone')->nullable();
                $table->boolean('online')->default(false);
                $table->integer('user_id')->unsigned()->index();
                $table->unsignedBigInteger('world_country_id')->unsigned()->index();

                $table->string('logo')->nullable();
                $table->string('thumbnail')->nullable();


                $table->softDeletes();
                $table->timestamps();
            }
        );

        Schema::table('companies', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('world_country_id')->references('id')->on('world_countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('companies');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
