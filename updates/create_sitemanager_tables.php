<?php namespace Avixity\SiteManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateAvixitySiteManagerSites extends Migration
{
    public function up()
    {
        Schema::create('avixity_sitemanager_sites', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->default(null);
            $table->string('url')->default(null);
            // $table->boolean(true)->default(true);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('avixity_sitemanager_sites');
    }
}
