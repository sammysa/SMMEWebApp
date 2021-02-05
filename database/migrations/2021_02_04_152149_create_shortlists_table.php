<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShortlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shortlists', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('startup_name', 255);
            $table->string('service_product', 255);
            $table->string('city', 255)->nullable();
            $table->string('province', 255)->nullable();
            $table->string('support_needed', 255);
            $table->text('support_expand');
            $table->text('support_other')->nullable();
            $table->string('twitter_handle', 150)->nullable();
            $table->string('email_address', 150);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shortlists');
    }
}
