<?php

use Phinx\Migration\AbstractMigration;

class CreateTableCategories extends AbstractMigration
{
    public function up()
    {
        $categories = $this->table('categories');

        $categories
            ->addColumn('title', 'string', ['limit' => 100, 'null' => false])
            ->addColumn('parent_id', 'integer', ['limit' => 10, 'null' => true])
            ->addColumn('description', 'text', ['null' => true])
            ->addColumn('lft', 'integer', ['null' => true])
            ->addColumn('rght', 'integer', ['null' => true])
            ->addColumn('level', 'integer', ['null' => true]);

        $categories->save();
    }

    public function down()
    {
        $this->dropTable('categories');
    }
}
