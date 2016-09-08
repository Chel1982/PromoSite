<?php

use yii\db\Migration;

/**
 * Handles the creation for table `user`.
 */
class m160908_115049_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("
          CREATE TABLE `user` (
          `id` int(11) NOT NULL,
          `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
          `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
          `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
          `status` smallint(6) NOT NULL DEFAULT '10',
          `created_at` int(11) NOT NULL,
          `updated_at` int(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
        ");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
