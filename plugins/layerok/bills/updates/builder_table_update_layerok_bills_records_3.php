<?php namespace Layerok\Bills\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLayerokBillsRecords3 extends Migration
{
    public function up()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->integer('previous_value')->nullable()->change();
            $table->integer('current_value')->nullable()->change();
            $table->dateTime('period_from')->nullable()->change();
            $table->dateTime('period_to')->nullable()->change();
            $table->decimal('rate', 11, 6)->nullable()->change();
            $table->decimal('total', 10, 2)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('layerok_bills_records', function($table)
        {
            $table->integer('previous_value')->nullable(false)->change();
            $table->integer('current_value')->nullable(false)->change();
            $table->dateTime('period_from')->nullable(false)->change();
            $table->dateTime('period_to')->nullable(false)->change();
            $table->decimal('rate', 11, 6)->nullable(false)->change();
            $table->decimal('total', 10, 2)->nullable(false)->change();
        });
    }
}
