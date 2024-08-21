<?php namespace Avixity\SiteManager\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
class CreateAvixitySiteManagerSites extends Migration
{
    public function up()
    {
        Schema::create('avixity_sitemanager_sites', function( Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title')->default(null);
            $table->string('url')->default(null);
            $table->timestamps();
            $table->boolean('is_active')->default(0);
            $table->string('category')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avixity_sitemanager_sites');
    }
}
