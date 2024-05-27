<?php

use App\Models\Campaign;
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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            $table->enum('type', ['custom_task', 'whatsapp_status_post', 'whatsapp_add_up']);
            $table->double('cost');
            $table->integer('actions_number')->nullable();
            $table->integer('quantity')->nullable();
            $table->enum('status', [Campaign::CAMPAIGN_PENDING, Campaign::CAMPAIGN_ACTIVE, Campaign::CAMPAIGN_COMPLETED]);
            $table->mediumText('instructions')->nullable();
            $table->text('task_file_url')->nullable();
            $table->double('budget')->nullable();
            $table->text('caption')->nullable();
            $table->text('add_up_link')->nullable();
            $table->enum('gender', ['male', 'female', 'all'])->nullable();
            $table->mediumText('states')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
