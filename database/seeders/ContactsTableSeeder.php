<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::truncate();

        Contact::create([
            'name' => 'Pedro Perez',
            'email' => 'pedro@example.com',
            'phone' => '55512345',
            'planet' => 'Tierra',
            'message' => 'I want to learn more about space exploration.',
            'deseo_personal' => 'Quiero ser feliz'
        ]);
        Contact::create([
            'name' => 'Mario Casas',
            'email' => 'mario@example.com',
            'phone' => '55512345',
            'planet' => 'Marte',
            'message' => 'I want to learn more about space exploration.',
            'deseo_personal' => 'Quiero ser rico'
        ]);
        Contact::create([
            'name' => 'Ana Lopez',
            'email' => 'ana@example.com',
            'phone' => '55512345',
            'planet' => 'Jupiter',
            'message' => 'I want to learn more about space exploration.',
            'deseo_personal' => 'Quiero ser un avión'
        ]);
        Contact::create([
            'name' => 'Maria Ocampo',
            'email' => 'maria@example.com',
            'phone' => '55512345',
            'planet' => 'Saturno',
            'message' => 'I want to learn more about space exploration.',
            'deseo_personal' => 'Quiero dormir todo el día'
        ]);
    }
}
