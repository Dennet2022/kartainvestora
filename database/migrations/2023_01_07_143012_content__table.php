<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id');
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->string('image_graph')->nullable();
            $table->longText('graph')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('image');
            $table->dropColumn('image_graph');
            $table->dropColumn('graph');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
};
