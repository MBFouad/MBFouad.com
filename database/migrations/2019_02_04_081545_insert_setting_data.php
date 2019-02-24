<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Settings;

class InsertSettingData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Insert some stuff
        $setting = new Settings();
        $setting->create(
            array(
                'name' => 'Website Name',
                'identify' => 'website-name',
                'value' => 'Mohamed Bahaa El-Dien Fouad',
            )
        );
        $setting->create(
            array(
                'name' => 'Website Logo',
                'identify' => 'website-logo',
                'value' => 'MBFouad',
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
