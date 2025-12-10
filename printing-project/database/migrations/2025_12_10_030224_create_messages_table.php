<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id('messageId');
            $table->foreignId('senderId')->constrained('users', 'userId')->cascadeOnDelete();
            $table->foreignId('receiverId')->constrained('users', 'userId')->cascadeOnDelete();
            $table->text('content');
            $table->boolean('isRead')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
