<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            KategoriSeeder::class,
            ProdukSeeder::class,
            DetailProdukSeeder::class,
            LayananSeeder::class,
            ArtikelSeeder::class,
        ]);

        // User::factory(10)->create();

        User::updateOrCreate(
            ['email' => 'admin-map@gmail.co.id'],
            [
                'name' => 'Admin',
                'password' => bcrypt('passwordnya123')
            ]
        );

        User::updateOrCreate(
            ['email' => 'admin2-map@gmail.co.id'],
            [
                'name' => 'Admin 2',
                'password' => bcrypt('passwordnya123')
            ]
        );
    }
}
