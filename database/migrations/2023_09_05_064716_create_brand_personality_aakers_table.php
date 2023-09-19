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
        Schema::create('brand_personality_aakers', function (Blueprint $table) {
            $table->id();
            $table->text('sincerity_hangat_dan_ramah');
            $table->text('sincerity_penuh_kasih_sayang');
            $table->text('sincerity_tulus');
            $table->text('sincerity_jujur');
            $table->text('sincerity_dapat_dipercaya');
            $table->text('competence_andal');
            $table->text('competence_terpercaya');
            $table->text('competence_memiliki_reputasi_yang_baik');
            $table->text('competence_berkinerja_baik');
            $table->text('competence_memberikan_nilai');
            $table->text('excitement_inovatif');
            $table->text('excitement_menarik');
            $table->text('excitement_penuh_semangat');
            $table->text('excitement_menyenangkan');
            $table->text('excitement_selalu_ada_yang_baru');
            $table->text('sophistication_elegan');
            $table->text('sophistication_berkelas');
            $table->text('sophistication_bergaya');
            $table->text('sophistication_canggih');
            $table->text('sophistication_mewah');
            $table->text('ruggedness_tangguh');
            $table->text('ruggedness_berkelas');
            $table->text('ruggedness_mandiri');
            $table->text('ruggedness_berani');
            $table->text('ruggedness_tidak_takut_mengambil_risiko');
            $table->text('average_sincerity');
            $table->text('average_competence');
            $table->text('average_excitement');
            $table->text('average_sophistication');
            $table->text('average_ruggedness');
            $table->string('gender');
            $table->integer('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_personality_aakers');
    }
};
