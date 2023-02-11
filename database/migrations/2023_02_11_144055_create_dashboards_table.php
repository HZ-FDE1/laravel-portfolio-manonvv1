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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('test_name');
            $table->string('lowest_passing_grade', $precision = 3, $scale = 1)
                ->default(5.5)->comment('Date that the grade was larger than or equal to the lowest passing grade.');
            $table->decimal('best_grade', $precision = 3, $scale = 1)->nullable();
            $table->date('passed_at')->nullable()
            ->comment('Date that the grade was larger than or equal to the lowest passing grade.');
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
        Schema::dropIfExists('dashboards');
    }
};
