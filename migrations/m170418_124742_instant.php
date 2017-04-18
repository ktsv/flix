<?php

use yii\db\Migration;

class m170418_124742_instant extends Migration
{
    public function up()
    {
        $this->createTable('link', [
                'short' => 'string(8) PRIMARY KEY',
                'long' => 'string(2048) not null',
                'clicked' => 'integer default 0',
                'time' => 'datetime not null'
        ]);
    }

    public function down()
    {
        $this->dropTable('link');
    }
}