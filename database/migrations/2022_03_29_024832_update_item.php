<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function ($collection) {
            $collection->id();
			$collection->string("name");
			$collection->string("description");
			$collection->text("custom_fields");
			$collection->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
};
