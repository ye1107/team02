<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->foreignId('uid')->comment('救生員編號(外部鍵2)');
            $table->foreign('uid')
            ->references('id')
            ->on('usernames')
            ->onDelete('cascade');
            $table->foreignId('kid')->comment('鑰匙編號(外部鍵1)');
            $table->foreign('kid')
            ->references('id')
            ->on('keys')
            ->onDelete('cascade');
            $table->date('lend_date')->comment('借用日期');
            $table->time('lend_time')->comment('借用時間');
            $table->date('back_date')->comment('歸還日期');
            $table->time('back_time')->comment('歸還時間');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
