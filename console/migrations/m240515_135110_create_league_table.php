<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%league}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m240515_135110_create_league_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%league}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => 'LONGTEXT',
            'image' => $this->string(2000),
            'price' => $this->decimal(10,2)->notNull(),
            'status' => $this->tinyInteger(2)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-league-created_by}}',
            '{{%league}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-league-created_by}}',
            '{{%league}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-league-updated_by}}',
            '{{%league}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-league-updated_by}}',
            '{{%league}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-league-created_by}}',
            '{{%league}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-league-created_by}}',
            '{{%league}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-league-updated_by}}',
            '{{%league}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-league-updated_by}}',
            '{{%league}}'
        );

        $this->dropTable('{{%league}}');
    }
}
