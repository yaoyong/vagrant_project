<?php

use Phinx\Migration\AbstractMigration;

class MyFirstMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
         // create the table
        $table = $this->table('click_counts');
        $table->addColumn('url', 'string')
              ->addColumn('clicks', 'integer')
              ->create();

    }

    /**
    * Migrate up
    */
    public function up()
    {

    }

    /**
    * Migrate down
    */
    public function down()
    {
        
    }
}
