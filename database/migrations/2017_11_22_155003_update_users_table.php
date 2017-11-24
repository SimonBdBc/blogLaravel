<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { //sudo php artisan make:migration update_users_table --table=users
        Schema::table('users', function (Blueprint $table) {
            $table->string('lastname')->after('idusers');
            $table->string('firstname')->after('lastname');
            $table->string('status')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
          $table->dropColumn('lastname');
          $table->dropColumn('firstname');
          $table->dropColumn('status');
        });
    }
}
