<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        // no need to add id since its auto increment
        $users = [
            [
                'first_name' => 'Jayvee',
                'middle_name' => 'Opeda',
                'last_name' => 'Panol',
                'email' => 'jayveepanol@gmail.com',
                'password_hash' => $Password123,
                'type' => 'admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Jay',
                'middle_name' => 'vee',
                'last_name' => 'pnl',
                'email' => 'jayvpnl@gmail.com',
                'password_hash' => $Password123,
                'type' => 'client',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($users);
    }
}
