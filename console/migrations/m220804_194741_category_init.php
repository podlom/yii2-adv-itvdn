<?php

use yii\db\Migration;

/**
 * Class m220804_194741_category_init
 */
class m220804_194741_category_init extends Migration
{
    const TABLE_CATEGORY = '{{%category}}';
    const TABLE_NEWS = '{{%news}}';

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

        $this->createTable(self::TABLE_CATEGORY, [
            'id' => $this->primaryKey(),
            'slug' => $this->string(255)->notNull()->unique(),
            'title' => $this->string(255)->notNull(),
            'enabled' => $this->boolean()->notNull()->defaultValue(0), // 0 or 1
        ], $tableOptions);

        $this->addForeignKey('fk_category_to_news', self::TABLE_NEWS, 'category_id', self::TABLE_CATEGORY, 'id', 'SET NULL', 'SET NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_category_to_news', self::TABLE_NEWS);

        $this->dropTable(self::TABLE_CATEGORY);
    }
}
