<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link')->default('https://www.youtube.com/embed/4isYOrzFsC8');
            $table->timestamps();
        });

        $homeVideo = array(
            'link'=>'https://www.youtube.com/embed/4isYOrzFsC8',
        );

        DB::table('home_videos')->insert($homeVideo);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_videos');
    }
}
