<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0=> array(
                'id'=>1,
                'full_name'=>'Bukenya',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin123'),
                'role'=>'admin'
                
            ),
            1=> array(
                'id'=>2,
                'full_name'=>'Rashid',
                'email'=>'rashid@gmail.com',
                'password'=>bcrypt('rashid123'),
                'role'=>'staff'
                
            )
            
            
        ));
    }
}
