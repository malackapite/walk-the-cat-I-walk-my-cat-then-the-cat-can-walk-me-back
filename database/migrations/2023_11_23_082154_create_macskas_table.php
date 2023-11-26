<?php

use App\Models\Macska;
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
        Schema::create('macskas', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->date('szul');
            $table->foreignId('sus_id')->references('azon')->on('suses');
            $table->timestamps();
        });
    
        Macska::create([
            'nev' => 'Sussy Kitty',
            'szul' => '1987-12-02',
            'sus_id' => 1
        ]);
        Macska::create([
            'nev' => 'Petya',
            'szul' => '1969-03-20',
            'sus_id' => 3
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('macskas');
    }
};
