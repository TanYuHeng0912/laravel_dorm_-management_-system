<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@123.com',
                'is_admin'=>'1',
               'password'=> bcrypt('admin123'),
               'age'=>'30',
               'gender'=>'male',
            ],
            [
                'name'=>'Tan',
                'email'=>'tanyuheng0912@gmail.com',
                 'is_admin'=>'0',
                'password'=> bcrypt('tan0912'),
                'age'=>'19',
                'gender'=>'male',
             ],

        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}