<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOnlineToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('categories') && !Schema::hasColumn('categories', 'online')) {
            Schema::table('categories', function (Blueprint $table) {
                $table->boolean('online')->after('description')->default(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('categories') && !Schema::hasColumn('categories', 'online')) {
            Schema::table('categories', function (Blueprint $table) {
                $table->dropColumn('online');
            });
        }
    }
}
