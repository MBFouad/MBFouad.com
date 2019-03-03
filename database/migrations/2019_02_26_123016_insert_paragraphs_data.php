<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Paragraphs;

class InsertParagraphsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $paragraph = new Paragraphs();
        $paragraph->create(
            array(
                'name' => 'About Me Description',
                'identify' => 'about-me-description',
                'value' => 'I am Mohamed, Web Programmer for 5+ years. develop and support my work, I take work that I can complete. I am flexible and love to finish my work, take 100% responsibility of tasks. Have solid understanding:- Page execution, DOM events and manipulation, Cross browser issues. UI/UX standards,  customizable website, seo, plugin development, popups, analytics, performance improvements etc. ',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
