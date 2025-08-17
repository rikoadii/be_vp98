<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            [
                'nama' => 'VICTOR - ITHONK',
                'profile' => 'teams/Ithonk.webp',
                'role' => 'DIRECTUR - BOD'
            ],
            [
                'nama' => 'ALGAMDI',
                'profile' => 'teams/Agam.webp',
                'role' => 'EVENT MANAGER'
            ],
            [
                'nama' => 'SATRIA PERDANA',
                'profile' => 'teams/Satria.webp',
                'role' => 'MANAGER PRODUCTION'
            ],
            [
                'nama' => 'JAMES BILLY',
                'profile' => 'teams/James.webp',
                'role' => 'VIDEOGRAPHER'
            ],
            [
                'nama' => 'EVELYN - PUPUT',
                'profile' => 'teams/evelyn-puput.webp',
                'role' => 'TALENT MANAGEMENT'
            ],
            [
                'nama' => 'NILA PASILA',
                'profile' => 'teams/nila_pasila.webp',
                'role' => 'FINANCE'
            ]
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}