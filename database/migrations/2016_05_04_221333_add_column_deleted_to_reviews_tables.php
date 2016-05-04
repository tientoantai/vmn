<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnDeletedToReviewsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('remedies_reviews', function ($table) {
            $table->softDeletes();
        });
        Schema::table('medicinal_plants_reviews', function ($table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('remedies_reviews', function ($table) {
            $table->dropColumn('deleted_at');
        });

        Schema::table('medicinal_plants_reviews', function ($table) {
            $table->dropColumn('deleted_at');
        });

    }
}
