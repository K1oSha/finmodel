<?php

use yii\db\Migration;

/**
 * Class m211113_051241_init
 */
class m211113_051241_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand(
            file_get_contents(
                Yii::getAlias('@app/migrations/baza.sql')
            )
        )->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211113_051241_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211113_051241_init cannot be reverted.\n";

        return false;
    }
    */
}
