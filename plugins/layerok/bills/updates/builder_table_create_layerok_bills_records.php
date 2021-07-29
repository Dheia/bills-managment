<?php namespace Layerok\Bills\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLayerokBillsRecords extends Migration
{
    public function up()
    {
        Schema::create('layerok_bills_records', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('previous_value')->unsigned();
            $table->integer('current_value')->unsigned();
            $table->dateTime('period_from');
            $table->dateTime('period_to');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('type_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('layerok_bills_records');
    }
}
