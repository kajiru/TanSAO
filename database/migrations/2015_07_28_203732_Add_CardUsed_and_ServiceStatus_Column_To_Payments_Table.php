<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCardUsedAndServiceStatusColumnToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->char('cardUsed');

            /*A note on ServiceStatus Column
             *
             * A service Status of:
             * 0 -- Service NOT Offered
             * 1 -- Service  Offered
             */

            $table->boolean('serviceStatus')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('cardUsed');
            $table->dropColumn('serviceStatus');
        });
    }
}
