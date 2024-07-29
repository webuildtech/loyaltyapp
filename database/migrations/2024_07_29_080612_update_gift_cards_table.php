<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGiftCardsTable extends Migration
{
    public function up()
    {
        Schema::table('gift_cards', function (Blueprint $table) {
            $table->decimal('balance', 8, 2)->default(0)->change();
            $table->date('expiry_date')->default('2025-01-01')->change();
        });
    }

    public function down()
    {
        Schema::table('gift_cards', function (Blueprint $table) {
            $table->decimal('balance', 8, 2)->change();
            $table->date('expiry_date')->change();
        });
    }
}
