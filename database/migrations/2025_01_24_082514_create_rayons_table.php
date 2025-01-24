<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRayonsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rayons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::table('siswas', function (Blueprint $table) {
            $table->unsignedBigInteger('rayon_id')->nullable()->after('rombel');
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswas', function (Blueprint $table) {
            $table->dropForeign(['rayon_id']);
            $table->dropColumn('rayon_id');
        });

        Schema::dropIfExists('rayons');
    }
}
