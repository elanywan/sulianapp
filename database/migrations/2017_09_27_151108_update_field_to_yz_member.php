<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFieldToYzMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (\Schema::hasTable('yz_member')) {

            if (Schema::hasColumn('yz_member', 'pay_password')) {
                Schema::table('yz_member', function ($table) {
                    $table->string('pay_password','45')->nullable()->change();
                });
            }
            if (Schema::hasColumn('yz_member', 'salt')) {
                Schema::table('yz_member', function ($table) {
                    $table->string('salt','8')->nullable()->change();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
