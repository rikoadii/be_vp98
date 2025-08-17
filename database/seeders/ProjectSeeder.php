<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Category;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $descriptions = [
            'EVENT KONSEP',
            'EVENT PRODUCTION',
            '3D EVENT',
            'SHOW MANAGEMENT',
            'PRE EVENT MANAGEMENT PARTNER',
            'VIP & TALENT MANAGEMENT'
        ];

        // Get random category IDs
        $categoryIds = Category::pluck('id')->toArray();

        $projects = [
            [
                'name_projects' => 'Inovasi Kreatif Event Management Terpadu Modern',
                'location_projects' => 'Jakarta Selatan, DKI Jakarta',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project1.png',
                'isMain' => true,
            ],
            [
                'name_projects' => 'Solusi Produksi Acara Berkualitas Tinggi',
                'location_projects' => 'Bandung, Jawa Barat',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project2.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'Konsep Event Tiga Dimensi Interaktif',
                'location_projects' => 'Surabaya, Jawa Timur',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project3.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'Manajemen Pertunjukan Spektakuler Entertainment',
                'location_projects' => 'Yogyakarta, DIY',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project4.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'Partner Strategis Pre Event Profesional',
                'location_projects' => 'Medan, Sumatera Utara',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project5.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'VIP Talent Management Elite Service',
                'location_projects' => 'Makassar, Sulawesi Selatan',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project6.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'Konsep Inovatif Show Production Management',
                'location_projects' => 'Semarang, Jawa Tengah',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project7.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'Event Management Solution Corporate Modern',
                'location_projects' => 'Denpasar, Bali',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project8.png',
                'isMain' => true,
            ],
            [
                'name_projects' => 'Production Event Management Professional Service',
                'location_projects' => 'Palembang, Sumatera Selatan',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project9.png',
                'isMain' => false,
            ],
            [
                'name_projects' => 'Talent Management VIP Entertainment Premium',
                'location_projects' => 'Balikpapan, Kalimantan Timur',
                'description_projects' => $descriptions[array_rand($descriptions)],
                'category_projects' => $categoryIds[array_rand($categoryIds)],
                'image' => 'projects/project10.png',
                'isMain' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
