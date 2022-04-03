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
        Schema::create('collection', function ($collection) {
            $collection->id();
            $collection->string("collectionName");
            $collection->string("userEmail");
            $collection->index("item.name");
            $collection->index("item.model");
            $collection->index("item.prodyear");
            $collection->index("item.acqdate");
            $collection->index("item.price");
            $collection->index("item.condition");
            $collection->index("item.pictureUrl");
            $collection->index("item.description");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection');
    }
};
