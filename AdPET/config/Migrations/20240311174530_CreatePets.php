<?php
use Phinx\Migration\AbstractMigration;

class CreatePets extends AbstractMigration
{
    public function change()
    {
        if (!$this->hasTable('pets')) {
            $table = $this->table('pets');
            $table->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ]);
            $table->addColumn('description', 'text', [
                'default' => null,
                'null' => false,
            ]);
            $table->addColumn('gender', 'string', [
                'default' => 'M',
                'limit' => 2,
                'null' => false,
            ]);
            $table->addColumn('birthday', 'datetime', [
                'default' => null,
                'null' => true,
            ]);
            $table->addColumn('created', 'datetime', [
                'default' => null,
                'null' => true,
            ]);
            $table->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => true,
            ]);
            $table->addColumn('family_id', 'integer');
            $table->addForeignKey('family_id', 'families', 'id')
            ;
            $table->addColumn('breed_id', 'integer');
            $table->addForeignKey('breed_id', 'breeds', 'id');
            $table->addColumn('user_id', 'integer');
            $table->addForeignKey('user_id', 'users', 'id');
            $table->create();
        }
    }
}