<?php

use Phinx\Migration\AbstractMigration;

class TableWritersCategories extends AbstractMigration
{
    public function up()
    {
        $writerscategories = $this->table('writers_categories');

        $writerscategories
            ->addColumn('writer_id', 'integer', ['limit' => 10, 'null' => false])
            ->addColumn('category_id', 'integer', ['limit' => 10, 'null' => false]);

        $writerscategories->save();
    }

    public function down()
    {
        $this->dropTable('writers_categories');
    }
}
