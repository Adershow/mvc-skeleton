<?php
namespace database\migrations;

require 'vendor/autoload.php';

use database\Config;
use Illuminate\Database\Capsule\Manager as Capsule;

class User_migration 
{
    public function generate_table() 
    {
        Capsule::schema()->create('users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
    }
}
