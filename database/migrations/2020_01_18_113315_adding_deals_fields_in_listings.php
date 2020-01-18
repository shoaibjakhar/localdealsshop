<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddingDealsFieldsInListings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->string('best_deal')->default(0)->nullable()->after('discount')->comment('1= yes, 0=no');
            $table->string('popular_deal')->default(0)->nullable()->after('best_deal')->comment('1= yes, 0=no');
            $table->string('featured_deal')->default(0)->nullable()->after('popular_deal')->comment('1= yes, 0=no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('best_deal');
            $table->dropColumn('popular_deal');
            $table->dropColumn('featured_deal');
        });
    }
}
