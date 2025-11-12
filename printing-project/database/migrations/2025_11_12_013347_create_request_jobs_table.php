<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('request_jobs', function (Blueprint $table) {
            $table->bigIncrements('jobId'); // BIGINT UNSIGNED PK
            $table->foreignId('requestFormId')
                  ->references('requestFormId')
                  ->on('request_forms')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->tinyInteger('paperType')->nullable();
            $table->integer('copies')->nullable();
            $table->integer('originals')->nullable();
            $table->boolean('isB2B')->default(false);
            $table->boolean('isFilm')->default(false);
            $table->decimal('cost', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_jobs');
    }
};
