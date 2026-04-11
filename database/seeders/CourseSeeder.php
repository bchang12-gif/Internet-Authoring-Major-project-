<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'code' => 'MTH107',
                'name' => 'General Mathematics',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Covers algebra, functions, and basic statistics.'
            ],
            [
                'code' => 'ITT201',
                'name' => 'Data Communications and Networks',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Introduces networking concepts, data transmission, and protocols.'
            ],
            [
                'code' => 'ITT215',
                'name' => 'Technical Writing for Digital Media',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Focuses on writing technical documents and reports.'
            ],
            [
                'code' => 'SPA101',
                'name' => 'Introduction to Spanish',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Basic Spanish vocabulary, grammar, and conversation.'
            ],
            [
                'code' => 'MKT201',
                'name' => 'Introduction to Marketing',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Marketing principles, branding, and consumer behavior.'
            ],
            [
                'code' => 'ITT203',
                'name' => 'Data Structures and File Management',
                'credits' => 3,
                'prerequisites' => 'ITT103',
                'description' => 'Stacks, queues, linked lists, and file handling.'
            ],
            [
                'code' => 'ITT103',
                'name' => 'Programming Techniques',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Programming fundamentals and problem solving.'
            ],
            [
                'code' => 'ITT211',
                'name' => 'Computer Data Analysis',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Data analysis and interpretation techniques.'
            ],
            [
                'code' => 'PSY100',
                'name' => 'Introduction to Psychology',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Human behavior and psychological theories.'
            ],
            [
                'code' => 'ITT116',
                'name' => 'Computer Essentials and Troubleshooting',
                'credits' => 3,
                'prerequisites' => 'None',
                'description' => 'Hardware basics and troubleshooting skills.'
            ]
        ]);
    }
}