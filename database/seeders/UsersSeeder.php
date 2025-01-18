<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createUser('admin1', 'password1');
        $this->createUser('admin2', 'password2');
    }

    protected function createUser(string $username, string $password)
    {
        User::firstOrCreate([
            'username' => $username,
        ], [
            'password' => bcrypt($password),
        ]);
    }
}
