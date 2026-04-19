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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('umur');
            $table->string('no_telp');
            $table->string('kelas');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('students', function (Blueprint $table) {
        $table->dropForeign(['subject_id']); // hapus relasi
        $table->dropColumn(['name','umur','no_telp','Nisn', 'tanggal_lahir', 'subject_id']); // hapus kolom
    });
}

};
