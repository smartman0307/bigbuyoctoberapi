<?php namespace PopovN\BigBuyAPI\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePopovnBigbuyapiTest extends Migration
{
    public function up()
    {
        Schema::create('popovn_bigbuyapi_test', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('command', 255)->nullable();
            $table->text('result')->nullable();
            $table->string('url', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('popovn_bigbuyapi_test');
    }
}
