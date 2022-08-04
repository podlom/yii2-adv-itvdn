<?php

use yii\db\Migration;


/**
 * Class m220804_192718_news_init
 */
class m220804_192718_news_init extends Migration
{
    const TABLE_NAME = '{{%news}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(),
            'slug' => $this->string(255)->notNull()->unique(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'enabled' => $this->boolean()->notNull()->defaultValue(0), // 0 or 1
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE_NAME);
    }
}
