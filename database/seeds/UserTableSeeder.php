<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('users')->insert([
    //         'name'  =>  'Maria da Silva',
    //         'email' => 'mariasilva1830@gmail.com',
    //         'phone' => '1144445555',
    //         'cel'   => '1199998888',
    //         'gender'=> 'feminino',
    //         'dob'   => '1830-01-01',
    //    ]);
    //    DB::table('users')->insert([
    //         'name'  =>  'Luiza da Silva',
    //         'email' => 'luizadasilva1930@gmail.com',
    //         'phone' => '1144445555',
    //         'cel'   => '1199998888',
    //         'gender'=> 'feminino',
    //         'dob'   => '1930-01-01',
    //    ]);
       DB::table('users')->insert([
           'name'   => 'Lucas Ferreira',
           'email'  => 'lucasferreira241@gmail.com',
           'phone'  => '1127247260',
           'cel'    => '1183004237',
           'gender' => 'masculino',
           'dob'    => '1993-03-03'
       ]);
    }
}
