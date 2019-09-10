<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // $admin = new Role();
        // $admin->name = 'bendahara';
        // $admin->description = 'Seorang Bendahara';
        // $admin->save();

        // $kepsek = new Role();
        // $kepsek->name = 'kepsek';
        // $kepsek->description = 'Seorang Kepala Sekolah';
        // $kepsek->save();
        
  //       $role_admin = Role::where('name', 'bendahara')->first();
  //       $role_kepsek = Role::where('name', 'kepsek')->first();

  //       $admin = new User();
  //       $admin->name = 'Bu Nita';
  //       $admin->email = 'nita@fitrahinsani.sch.id';
  //       $admin->password = bcrypt('admin123');
  //       $admin->save();
  //       $admin->roles()->attach($role_admin);

		// $kepsek = new User();
  //       $kepsek->name = 'Bu Eni';
  //       $kepsek->email = 'eni@fitrahinsani.sch.id';
  //       $kepsek->password = bcrypt('kepsek123');
  //       $kepsek->save();
  //       $kepsek->roles()->attach($role_kepsek);        
    }
}
