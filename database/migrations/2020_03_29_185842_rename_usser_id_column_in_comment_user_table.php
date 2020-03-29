<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameUsserIdColumnInCommentUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comment_user', function (Blueprint $table) {
            $table->renameColumn('usser_id', 'user_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comment_user', function (Blueprint $table) {
            $table->renameColumn('user_id', 'usser_id')->change();
        });
    }
}
