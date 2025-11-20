<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('App\\Database\\Seeds\\ClearDatabaseSeeder');
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        // no need to add id since its auto increment
        $dataYouWannaInsert = [
            [
                'first_name' => 'Jayvee',
                'middle_name' => 'Opeda',
                'last_name' => 'Panol',
                'email' => 'panoljayvee@gmail.com',
                'password_hash' => password_hash('Password123!', PASSWORD_DEFAULT),
                'type' => 'admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'first_name' => 'Jay',
                'middle_name' => 'vee',
                'last_name' => 'lonap',
                'email' => 'jayVpnl@gmail.com',
                'password_hash' => password_hash('Password123!', PASSWORD_DEFAULT),
                'type' => 'client',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
