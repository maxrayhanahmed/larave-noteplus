<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProfileAddToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('provider_id')->nullable();
            $table->string('user_type')->default('user');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('image')->nullable();
            $table->text('street_address_1')->nullable();
            $table->text('street_address_2')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('alt_mobile_no')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('city')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
