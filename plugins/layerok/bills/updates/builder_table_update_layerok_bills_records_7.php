<?php namespace Layerok\Bills\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLayerokBillsRecords7 extends Migration
{
    public function up()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->integer('delta')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->dropColumn('delta');
        });
    }
}
