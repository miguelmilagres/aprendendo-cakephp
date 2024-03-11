<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAddresses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        if(!$this->hasTable('adresses')) {
            $table = $this->table('adresses');
            $table->addColumn('street', 'string', [
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('zipcode', 'integer', [
                'default' => null,
                'limit' => 11,
            ]);
            $table->create();
        }
    }
}
