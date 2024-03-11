<?php

use Migrations\AbstractMigration;

class CreateAdoptions extends AbstractMigration
{
    public function change()
    {
        if (!$this->hasTable('adoptions')) {
            $table = $this->table('adoptions');
            $table->addColumn('created', 'datetime', ['default' => null, 'null' => true]);
            $table->addColumn('modified', 'datetime', [
                'default'
                => null,
                'null' => true
            ]);
            $table->addColumn('user_id', 'integer');
            $table->addForeignKey('user_id', 'users', 'id');
            $table->addColumn('pet_id', 'integer');
            $table->addForeignKey('pet_id', 'pets', 'id');
            $table->create();
        }
    }
}