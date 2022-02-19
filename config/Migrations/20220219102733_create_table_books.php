<?php

use Phinx\Migration\AbstractMigration;

class CreateTableBooks extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    // public function change(){}

    public function up()
    {
        $books = $this->table('books');

        $books
            ->addColumn('publisher_id', 'integer', ['limit' => 5, 'null' => false])
            ->addColumn('uid', 'string', ['limit' => 64, 'null' => false])
            ->addColumn('title', 'string', ['limit' => 150, 'null' => false])
            ->addColumn('cover', 'string', ['limit' => 100, 'null' => true])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('year', 'integer', ['limit' => 4, 'null' => true]);

        $books->save();
    }

    public function down()
    {
        $this->dropTable('books');
    }
}
