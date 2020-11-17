<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hd_fevicon')->nullable();
            $table->string('hd_theme')->nullable();
            $table->string('hd_title')->nullable();
            $table->string('hd_phone')->nullable();
            $table->string('hd_email')->nullable();
            $table->string('logo_type')->nullable();
            $table->string('hd_img_logo')->nullable();
            $table->string('hd_txt_logo')->nullable();
            $table->string('hd_txt_logo_tagline')->nullable();
            $table->text('hd_address')->nullable();
            $table->string('hd_developer_name')->nullable();
            $table->string('hd_developer_site_url')->nullable();
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
        Schema::dropIfExists('theme_settings');
    }
}
