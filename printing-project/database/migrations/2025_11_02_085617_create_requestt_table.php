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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();

            // General request info
            $table->string('description')->nullable();
            $table->string('forwarded_by');
            $table->string('received_by')->nullable();
            $table->string('requested_by');
            $table->enum('status', ['Pending', 'Approved', 'In Progress', 'Completed', 'Rejected'])
                  ->default('Pending');

            // Service type (RISOGRAPH, PHOTOCOPY, etc.)
            $table->enum('service_type', ['RISOGRAPH', 'PHOTOCOPY', 'LAMINATE', 'SORT', 'PRINT']);

            // Service-specific fields (nullable where not used)
            $table->integer('original')->nullable();
            $table->integer('copies')->nullable();
            $table->string('type_of_paper')->nullable();
            $table->boolean('is_b2b')->nullable(); // Back-to-back option

            // Department relationship
            $table->foreignId('department_id')
                ->nullable()
                ->constrained('departments')
                ->onDelete('set null');

            // Cost and tracking
            $table->decimal('total_cost', 10, 2)->default(0);
            $table->timestamp('date_created')->useCurrent();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
