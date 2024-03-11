<?php

use Migrations\AbstractMigration;

class AddCityIdToAddresses extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('addresses');
        $table->addColumn('city_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addForeignKey('city_id', 'cities', 'id');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addForeignKey('user_id', 'users', 'id');
        $table->update();
    }
}