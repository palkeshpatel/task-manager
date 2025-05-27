<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Website Redesign',
                'description' => 'Complete redesign of the company website with modern UI/UX principles, responsive design, and improved performance. This project includes user research, wireframing, design mockups, and development implementation.',
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Development of a cross-platform mobile application for iOS and Android. Features include user authentication, real-time notifications, offline functionality, and integration with existing APIs.',
            ],
            [
                'name' => 'Database Migration',
                'description' => 'Migration of legacy database systems to modern cloud infrastructure. Includes data cleaning, schema optimization, performance tuning, and comprehensive testing to ensure zero data loss.',
            ],
            [
                'name' => 'Marketing Campaign Q4',
                'description' => 'Comprehensive marketing campaign for Q4 including social media strategy, content creation, email marketing automation, and performance analytics tracking across multiple channels.',
            ],
            [
                'name' => 'API Integration Project',
                'description' => 'Integration of third-party APIs for payment processing, shipping calculations, and inventory management. Includes error handling, rate limiting, and comprehensive documentation.',
            ],
            [
                'name' => 'Security Audit & Compliance',
                'description' => 'Complete security audit of all systems and applications. Implementation of security best practices, compliance with industry standards, and staff training on security protocols.',
            ],
            [
                'name' => 'Customer Support Portal',
                'description' => 'Development of a self-service customer support portal with ticket management, knowledge base, live chat integration, and customer satisfaction tracking.',
            ],
            [
                'name' => 'Data Analytics Dashboard',
                'description' => 'Creation of an interactive dashboard for business intelligence and data visualization. Real-time reporting, custom metrics, and automated report generation for stakeholders.',
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
