<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_insights', function (Blueprint $table) {
            $table->id();

            // 1. Identitas Provider & Identifier
            $table->string('provider', 50)->default('github')->index(); // 'github', 'linkedin', 'website'
            $table->string('username', 255)->nullable()->index(); // ID / Username / Path URL

            // 2. Metric Payload
            $table->unsignedBigInteger('views_count')->nullable(); // Tambahkan ->nullable()
            $table->text('raw_response')->nullable(); // debugging / payload cadangan

            // 3. Request Status Metadata
            $table->string('source_url', 500)->nullable();
            $table->integer('status_code')->nullable();
            $table->boolean('is_successful')->default(false);

            // 4. Timestamps & Multi-column Indexing
            $table->timestamp('captured_at');
            $table->timestamps();

            // Indexing gabungan untuk query snapshot harian/per-provider yang cepat
            $table->index(['provider', 'username', 'captured_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_insights');
    }
};
