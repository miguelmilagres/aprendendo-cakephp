<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCities extends AbstractMigration
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
        if (!$this->hasTable('cities')) {
            $table = $this->table('cities');
            $table->addColumn('name', 'string', [
                'limit' => 255,
                'null' => false,
            ]);
            $table->create();
        }
    }
}
