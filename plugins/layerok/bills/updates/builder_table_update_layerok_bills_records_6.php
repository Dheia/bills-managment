<?php namespace Layerok\Bills\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLayerokBillsRecords6 extends Migration
{
    public function up()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->decimal('rate', 10, 3)->change();
        });
    }
    
    public function down()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->decimal('rate', 10, 2)->change();
        });
    }
}
