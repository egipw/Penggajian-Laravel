<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	[ 'name' => 'admin',
        	  'display_name' => 'Bendahara',
        	  'description' => 'Bendahara'
        	],
        	[ 'name' => 'kepsek',
        	  'display_name' => 'Kepala Sekolah',
        	  'description' => 'Kepala Sekolah'
        	],
        ];

        foreach($roles as $key => $value){
        	Role::create($value);
        }

        $users = [
        	['name' => 'Bu Nita',
        	 'email' => 'nita@fitrahinsani.sch.id',
        	 'password' => bcrypt('admin123'),
        	],
        	['name' => 'Bu Eni',
        	 'email' => 'eni@fitrahinsani.sch.id',
        	 'password' => bcrypt('kepsek123'),
        	],
        ];
        $n=1;
        foreach ($users as $key => $value) {
        	$user=User::create($value);
        	$user->attachRole($n);
        	$n++;
        }
    }
}
