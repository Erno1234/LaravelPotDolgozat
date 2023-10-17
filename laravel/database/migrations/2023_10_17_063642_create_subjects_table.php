<?php

use App\Models\Subject;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id('subject_id');
            $table->string('name');
            $table->string('description');
            $table->integer('limit');
            $table->timestamps();
        });

        Subject::create(['name' => 'Irodalom', 'description'=> 'Petőfi versei','limit'=>30]);
        Subject::create(['name' => 'Történelem ', 'description'=> 'I. Világháború','limit'=>15]);
        Subject::create(['name' => 'Testnevelés ', 'description'=> 'Ugrálókötél','limit'=>20]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
