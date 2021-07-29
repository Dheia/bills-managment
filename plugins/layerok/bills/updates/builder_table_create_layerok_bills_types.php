<?php namespace Layerok\Bills\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLayerokBillsTypes extends Migration
{
    public function up()
    {
        Schema::create('layerok_bills_types', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('layerok_bills_types');
    }
}
