<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdminIdColumnToNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noticias', function (Blueprint $table) {
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('noticias', function (Blueprint $table) {
              $table->dropForeign('noticias_admin_id_foreign');
              $table->dropColumn('admin_id');
        });
    }
}
