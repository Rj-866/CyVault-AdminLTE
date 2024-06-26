<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecapsTable extends Migration
{
    public function up()
    {
        Schema::create('recaps', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->decimal('sales', 8, 2);
            $table->decimal('expenses', 8, 2);
            $table->decimal('profit', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('recaps');
    }
}

