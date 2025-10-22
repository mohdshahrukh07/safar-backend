<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::connection(config('logtodb.connection'))->hasTable(config('logtodb.collection')) === false) {
            Schema::connection(config('logtodb.connection'))->create(config('logtodb.collection'), function (Blueprint $table) {
                $table->increments('id');
                $table->text('message')->nullable();
                $table->string('channel')->nullable();
                $table->integer('level')->default(0);
                $table->string('level_name', 20);
                $table->integer('unix_time');
                $table->string('datetime')->nullable();
                $table->longText('context')->nullable();
                $table->text('extra')->nullable();
                $table->timestamps();

                // Adding indexes
                $table->index('channel');
                $table->index('level');
                $table->index('level_name');
                $table->index('unix_time');
                $table->index('created_at');
                $table->index('updated_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection(config('logtodb.connection'))->dropIfExists(config('logtodb.collection'));
    }
};
