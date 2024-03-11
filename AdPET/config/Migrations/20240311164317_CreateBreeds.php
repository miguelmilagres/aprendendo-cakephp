<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateBreeds extends AbstractMigration
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
        if (!$this->table('breeds')) {
            $table = $this->table('breeds');
            $table->addColumn('street', 'name', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->create();
        }
    }
}
