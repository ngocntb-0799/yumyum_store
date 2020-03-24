<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthday')->nullable();
            $table->smallInteger('gender');
            $table->string('tel');
            $table->string('tel_home')->nullable();
            $table->unsignedBigInteger('precinct_id');
            $table->smallInteger('role');
            $table->unsignedInteger('shop_id');
            $table->string('image')->nullable();
            $table->softDeletes();
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
            $table->dropColumn(array(
                'birthday',
                'gender',
                'tel',
                'tel_home',
                'precinct_id',
                'role',
                'shop_id',
                'image',
                'deleted_at',
            ));
        });
    }
}
