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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
                $table->string('name');
                $table->longText('bio')->nullable();
                $table->boolean('can_dm_me')->default(true);
                $table->boolean('can_public_msg_me')->default(true);
                $table->string('email')->unique();
                $table->integer('media_id_profile_picture')->nullable();
                $table->integer('language_id')->nullable()->default(null);
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->integer("score_sum")->default(0); // Sum score from reputation
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
