<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('provider_id')->nullable();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->text('street_address_1')->nullable();
            $table->text('street_address_2')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('alt_mobile_no')->nullable();
            $table->string('email');
            $table->string('pin_code')->nullable();
            $table->string('city')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            $table->string('role_id')->nullable()->default(0);
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedin_url')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
