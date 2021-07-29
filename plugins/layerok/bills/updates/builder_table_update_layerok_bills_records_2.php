<?php namespace Layerok\Bills\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLayerokBillsRecords2 extends Migration
{
    public function up()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->decimal('total', 10, 2);
        });
    }
    
    public function down()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->dropColumn('total');
        });
    }
}
