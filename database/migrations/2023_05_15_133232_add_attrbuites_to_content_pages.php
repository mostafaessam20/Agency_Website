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
        Schema::table('content_pages', function (Blueprint $table) {
            $table->string('title_ar')->nullable();
            $table->longText('page_text_ar')->nullable();
            $table->longText('excerpt_ar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content_pages', function (Blueprint $table) {
            $table->dropColumn('title_ar');
            $table->dropColumn('page_text_ar');
            $table->dropColumn('excerpt_ar');
    
        });
    }
};
