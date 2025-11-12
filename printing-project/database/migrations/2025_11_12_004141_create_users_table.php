<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userId'); // BIGINT UNSIGNED PK
            $table->string('fname');
            $table->string('lname');
            $table->string('password');
            $table->foreignId('deptId') // BIGINT UNSIGNED FK
                  ->references('deptId')
                  ->on('departments')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->tinyInteger('role')->default(2); // 0=Admin,1=OfficeHead,2=Staff,3=READS
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
