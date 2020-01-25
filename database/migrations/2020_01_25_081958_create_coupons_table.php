<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('coupon_number')->comment('Actual coupon number');
            $table->integer('user_id_belongs_to')->nullable()->length(11)->comment('coupon purchased by user');
            $table->integer('customer_id_used_by')->nullable()->length(11)->comment('coupon used by customer');
            $table->date('coupon_copied_at')->nullable()->comment('coupon copied by customer at date');
            $table->date('expiry_date_after_copy')->nullable()->comment('coupon expiry date after copied by customer/valid till date');
            $table->tinyInteger('is_wasted')->default(0)->comment('if coupied and not used, is wasted');
            $table->date('wasted_at')->nullable()->comment('if wasted, wasted date');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
