<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddForeignCategoryPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();

            //La tabelle dei post ha la colonna category_id con riferimento alla colonna id di category
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //Eliminare i legami nel momento in cui si chiama dal terminale il comando rollback
            $table->dropForeign('posts_category_id_foreign');
            //Elimina la colonna category_id dopo aver eliminato i legami
            $table->dropColumn('category_id');
        });
    }
}
