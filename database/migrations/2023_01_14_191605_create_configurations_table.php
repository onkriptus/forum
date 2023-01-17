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
        Schema::create('configurations', function (Blueprint $table)
        {
            $table->id();
                $table->integer("language");
                $table->integer("sign_up_role_id"); /* Describe if user can enter by invite or self register */
                $table->boolean("must_email_confirm")->default(false);
                $table->integer("minimal_points_to_auto_approve")->default(false); /* Zero or false if is not necessary */
                $table->boolean("lock_for_maintenance")->default(false);
                $table->boolean("must_register_to_see_topics")->default(false);
                $table->boolean("user_reactions")->default(true);
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
        Schema::dropIfExists('configurations');
    }
};
