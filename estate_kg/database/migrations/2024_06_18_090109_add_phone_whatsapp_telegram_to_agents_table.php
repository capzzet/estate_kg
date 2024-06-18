<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneWhatsappTelegramToAgentsTable extends Migration
{
    public function up()
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
        });
    }

    public function down()
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->dropColumn(['phone', 'whatsapp', 'telegram']);
        });
    }
}
