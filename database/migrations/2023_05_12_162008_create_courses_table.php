<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CourseCategory;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string("thumbnail");
            $table->foreignIdFor(CourseCategory::class);
            $table->string("title");
            $table->string("sub_title");
            $table->string("slug");
            $table->string("description");
            $table->string("things_to_learn");
            $table->string("selling_price");
            $table->string("regular_price");
            $table->string("meta_title");
            $table->string("meta_keywords");
            $table->string("meta_description");
            $table->string("instractors");
            $table->json("chapters");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
