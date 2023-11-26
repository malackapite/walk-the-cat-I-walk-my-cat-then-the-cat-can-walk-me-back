<?php

use App\Models\Sus;
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
        Schema::create('suses', function (Blueprint $table) {
            $table->id('azon');
            $table->string('megnevezes');
            $table->timestamps();
        });

        Sus::create(['azon' => 1, 'megnevezes' => 'nem sus']);
        Sus::create(['azon' => 2, 'megnevezes' => 'sus']);
        Sus::create(['azon' => 3, 'megnevezes' => 'among sus']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suses');
    }
};
