<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateFamilies extends AbstractMigration
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
        if (!$this->hasTable('families')) {
            $table = $this->table('families');
            $table->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->create();
        }
    }
}
