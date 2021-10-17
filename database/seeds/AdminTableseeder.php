<?php
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'id'         => 16440,
                'name'       =>'Sunimal',
                'email'      =>'sunimal.com',
                'password'   =>1234
            ]
            ];
            Admin::insert($admin);
    }
}
