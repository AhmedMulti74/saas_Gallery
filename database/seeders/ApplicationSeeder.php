<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application; // تأكد من استيراد النموذج الخاص بك

class ApplicationSeeder extends Seeder
{
    public function run()
    {
        Application::create([
            'name' => 'App One',
            'description' => 'Description for App One',
            'is_featured' => true,
        ]);

        Application::create([
            'name' => 'App Two',
            'description' => 'Description for App Two',
            'is_featured' => false,
        ]);

        Application::create([
            'name' => 'App Three',
            'description' => 'Description for App Three',
            'is_featured' => true,
        ]);
    }
}
