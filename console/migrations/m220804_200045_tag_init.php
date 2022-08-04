<?php

use yii\db\Migration;

/**
 * Class m220804_200045_tag_init
 */
class m220804_200045_tag_init extends Migration
{
    const TABLE_TAG = '{{%tag}}';
    const TABLE_TAG_TO_NEWS = '{{%tag_to_news}}';
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

        $this->createTable(self::TABLE_TAG, [
            'id' => $this->primaryKey(),
            'slug' => $this->string(255)->notNull()->unique(),
            'title' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->createTable(self::TABLE_TAG_TO_NEWS, [
            'tag_id' => $this->integer(),
            'news_id' => $this->integer(),
        ], $tableOptions);
        $this->addPrimaryKey('pk_tag_to_news', self::TABLE_TAG_TO_NEWS, ['tag_id', 'news_id']);

        $this->addForeignKey('fk_tag_to_news_tag', self::TABLE_TAG_TO_NEWS, 'tag_id', self::TABLE_TAG, 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_tag_to_news_news', self::TABLE_TAG_TO_NEWS, 'news_id', self::TABLE_NEWS, 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_tag_to_news_news', self::TABLE_TAG_TO_NEWS);
        $this->dropForeignKey('fk_tag_to_news_tag', self::TABLE_TAG_TO_NEWS);

        $this->dropTable(self::TABLE_TAG_TO_NEWS);
        $this->dropTable(self::TABLE_TAG);
    }
}
