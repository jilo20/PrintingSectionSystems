<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('request_forms', function (Blueprint $table) {
            $table->bigIncrements('requestFormId'); // BIGINT UNSIGNED PK
            $table->foreignId('deptId')
                  ->references('deptId')
                  ->on('departments')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->foreignId('userId')
                  ->references('userId')
                  ->on('users')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->string('receivedBy')->nullable();
            $table->string('forwardedBy')->nullable();
            $table->string('requestedBy');
            $table->string('approvedBy')->nullable();
            $table->time('timeIn')->nullable();
            $table->time('timeOut')->nullable();
            $table->date('date')->default(DB::raw('CURRENT_DATE'));
            $table->decimal('totalCost', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_forms');
    }
};
