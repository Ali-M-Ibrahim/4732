<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = new Role();
        $role1->name="Admin";
        $role1->key = "A";
        $role1->save();

        $role2 = new Role();
        $role2->name="Broker";
        $role2->key = "B";
        $role2->save();



    }
}
