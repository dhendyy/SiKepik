<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Driver::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '08xx-xxxx-xxx',
            'image_url' => 'path_to_image.jpg',
        ]);
    }
}
