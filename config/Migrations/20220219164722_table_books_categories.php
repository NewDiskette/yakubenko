<?php

use Phinx\Migration\AbstractMigration;

class TableBooksCategories extends AbstractMigration
{
    public function up()
    {
        $bookscategories = $this->table('books_categories');

        $bookscategories
            ->addColumn('book_id', 'integer', ['limit' => 10, 'null' => false])
            ->addColumn('category_id', 'integer', ['limit' => 10, 'null' => false]);

        $bookscategories->save();
    }

    public function down()
    {
        $this->dropTable('books_categories');
    }

}
