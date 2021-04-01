<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /** https://readouble.com/laravel/5.8/ja/migrations.html
     * Run the migrations.
     * upが実行(作成)
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title', 100);
                $table->text('content');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     * downが元に戻す(削除)
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
