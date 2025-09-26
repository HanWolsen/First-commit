<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function up(): void
    {
        Schema::create('statuses', function (Bluerprit $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }


    public function down(): void 
    {
        Schema::dropIfExists('statuses');
    }
};
