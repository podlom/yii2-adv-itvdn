<?php

use yii\db\Migration;


/**
 * Class m220804_192718_news_init
 */
class m220804_192718_news_init extends Migration
{
    const TABLE_NAME = 'news';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'int' => $this->integer(),
            'varchar' => $this->string(),
            'tinyint' => $this->boolean(),
            'text' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
