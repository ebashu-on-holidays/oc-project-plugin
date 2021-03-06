<?php namespace Bronx\Project\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use October\Rain\Support\Facades\Schema;

class Migration_Project_1_0 extends Migration
{
    public function up()
    {
        Schema::create('bronx_project_tab_project', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');

            $table->string('name');
            $table->string('name_h1');
            $table->string('slug');

            $table->text('short_description')->nullable();
            $table->text('description')->nullable();

            $table->string('address')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            $table->integer('sort_order')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bronx_project_tab_project');
    }
}