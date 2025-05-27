<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use App\Models\UserActivityLog;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::all();
        $users = User::all();

        $taskTemplates = [
            // Website Redesign Tasks
            1 => [
                ['title' => 'Conduct User Research', 'description' => 'Interview existing users and analyze current website usage patterns to understand pain points and requirements.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(15)],
                ['title' => 'Create Wireframes', 'description' => 'Design low-fidelity wireframes for all main pages including homepage, product pages, and checkout flow.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(10)],
                ['title' => 'Design UI Mockups', 'description' => 'Create high-fidelity design mockups based on approved wireframes with brand colors and typography.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(5)],
                ['title' => 'Frontend Development', 'description' => 'Implement responsive frontend using HTML, CSS, and JavaScript based on approved designs.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(20)],
                ['title' => 'Backend Integration', 'description' => 'Integrate frontend with existing backend APIs and ensure all functionality works correctly.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(25)],
                ['title' => 'Performance Optimization', 'description' => 'Optimize website performance including image compression, code minification, and caching strategies.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(30)],
            ],
            // Mobile App Development Tasks
            2 => [
                ['title' => 'Setup Development Environment', 'description' => 'Configure React Native development environment with necessary tools and dependencies.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(20)],
                ['title' => 'Design App Architecture', 'description' => 'Plan the overall app architecture including navigation, state management, and API integration patterns.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(18)],
                ['title' => 'Implement Authentication', 'description' => 'Build user registration, login, and password reset functionality with secure token management.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(12)],
                ['title' => 'Create Main Navigation', 'description' => 'Implement tab navigation and drawer navigation with proper routing between screens.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(3)],
                ['title' => 'Push Notifications Setup', 'description' => 'Configure Firebase Cloud Messaging for real-time push notifications on both iOS and Android.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(10)],
                ['title' => 'Offline Data Sync', 'description' => 'Implement offline functionality with local storage and data synchronization when connection is restored.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(18)],
                ['title' => 'App Store Submission', 'description' => 'Prepare app for submission to Apple App Store and Google Play Store including metadata and screenshots.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(35)],
            ],
            // Database Migration Tasks
            3 => [
                ['title' => 'Analyze Current Database', 'description' => 'Comprehensive analysis of existing database structure, relationships, and data quality issues.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(25)],
                ['title' => 'Design New Schema', 'description' => 'Design optimized database schema with proper normalization and indexing strategies.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(20)],
                ['title' => 'Data Cleaning Scripts', 'description' => 'Create scripts to clean and validate data before migration, handling duplicates and inconsistencies.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(15)],
                ['title' => 'Migration Scripts Development', 'description' => 'Develop robust migration scripts with error handling and rollback capabilities.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(7)],
                ['title' => 'Testing Environment Setup', 'description' => 'Set up testing environment to validate migration process and data integrity.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(12)],
                ['title' => 'Production Migration', 'description' => 'Execute production migration with minimal downtime and comprehensive monitoring.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(25)],
            ],
            // Marketing Campaign Q4 Tasks
            4 => [
                ['title' => 'Market Research', 'description' => 'Research target audience, competitor analysis, and market trends for Q4 campaign planning.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(30)],
                ['title' => 'Campaign Strategy Document', 'description' => 'Create comprehensive campaign strategy including goals, target audience, and key messaging.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(25)],
                ['title' => 'Content Calendar Creation', 'description' => 'Develop detailed content calendar for all social media platforms and marketing channels.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(20)],
                ['title' => 'Creative Asset Development', 'description' => 'Design and create all visual assets including banners, social media graphics, and video content.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(5)],
                ['title' => 'Email Campaign Setup', 'description' => 'Set up automated email marketing sequences with personalization and A/B testing.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(10)],
                ['title' => 'Social Media Campaign Launch', 'description' => 'Launch coordinated social media campaign across all platforms with scheduled posts.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(15)],
                ['title' => 'Performance Analytics Setup', 'description' => 'Configure tracking and analytics to measure campaign performance and ROI.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(8)],
            ],
            // API Integration Project Tasks
            5 => [
                ['title' => 'API Documentation Review', 'description' => 'Review and analyze documentation for all third-party APIs to be integrated.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(14)],
                ['title' => 'Payment Gateway Integration', 'description' => 'Integrate Stripe payment processing with secure handling of payment data and webhooks.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(8)],
                ['title' => 'Shipping API Integration', 'description' => 'Integrate shipping calculation APIs for real-time shipping rates and tracking.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(6)],
                ['title' => 'Inventory Management API', 'description' => 'Connect with inventory management system for real-time stock updates and synchronization.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(12)],
                ['title' => 'Error Handling Implementation', 'description' => 'Implement comprehensive error handling and retry logic for all API integrations.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(15)],
                ['title' => 'API Documentation', 'description' => 'Create comprehensive documentation for all API integrations including examples and troubleshooting.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(20)],
            ],
            // Security Audit & Compliance Tasks
            6 => [
                ['title' => 'Security Assessment', 'description' => 'Conduct comprehensive security assessment of all systems and applications.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(22)],
                ['title' => 'Vulnerability Scanning', 'description' => 'Perform automated vulnerability scanning and penetration testing on all systems.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(18)],
                ['title' => 'Security Policy Updates', 'description' => 'Update security policies and procedures to meet current industry standards and compliance requirements.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(4)],
                ['title' => 'Staff Security Training', 'description' => 'Conduct security awareness training for all staff members including phishing prevention.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(14)],
                ['title' => 'Compliance Documentation', 'description' => 'Prepare all necessary documentation for compliance audits and certifications.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(21)],
            ],
            // Customer Support Portal Tasks
            7 => [
                ['title' => 'Requirements Gathering', 'description' => 'Gather detailed requirements from customer support team and stakeholders.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(16)],
                ['title' => 'Portal Design & UX', 'description' => 'Design user-friendly interface for customer self-service portal with intuitive navigation.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(10)],
                ['title' => 'Ticket Management System', 'description' => 'Develop ticket creation, tracking, and management system with priority levels and categories.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(8)],
                ['title' => 'Knowledge Base Development', 'description' => 'Create searchable knowledge base with articles, FAQs, and troubleshooting guides.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(16)],
                ['title' => 'Live Chat Integration', 'description' => 'Integrate live chat functionality with agent routing and chat history management.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(22)],
                ['title' => 'Customer Satisfaction Tracking', 'description' => 'Implement customer satisfaction surveys and feedback collection system.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(28)],
            ],
            // Data Analytics Dashboard Tasks
            8 => [
                ['title' => 'Data Source Analysis', 'description' => 'Analyze all available data sources and define data integration requirements.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(12)],
                ['title' => 'Dashboard Framework Setup', 'description' => 'Set up dashboard framework with charting libraries and responsive design components.', 'status' => 'completed', 'due_date' => Carbon::now()->subDays(6)],
                ['title' => 'Real-time Data Pipeline', 'description' => 'Build real-time data pipeline for live dashboard updates and data processing.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(9)],
                ['title' => 'Custom Metrics Implementation', 'description' => 'Implement custom business metrics and KPI calculations with drill-down capabilities.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(17)],
                ['title' => 'Automated Reporting', 'description' => 'Create automated report generation system with scheduled delivery to stakeholders.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(24)],
                ['title' => 'User Access Controls', 'description' => 'Implement role-based access controls and data filtering based on user permissions.', 'status' => 'pending', 'due_date' => Carbon::now()->addDays(19)],
            ],
        ];

        foreach ($projects as $index => $project) {
            $projectTasks = $taskTemplates[$project->id] ?? [];

            foreach ($projectTasks as $taskData) {
                $task = Task::create([
                    'project_id' => $project->id,
                    'title' => $taskData['title'],
                    'description' => $taskData['description'],
                    'status' => $taskData['status'],
                    'due_date' => $taskData['due_date'],
                    'created_at' => Carbon::now()->subDays(rand(1, 30)),
                    'updated_at' => Carbon::now()->subDays(rand(0, 5)),
                ]);

                // Create activity log for task creation
                if ($users->count() > 0) {
                    $randomUser = $users->random();
                    UserActivityLog::create([
                        'user_id' => $randomUser->id,
                        'action' => 'created',
                        'model_type' => 'Task',
                        'model_id' => $task->id,
                        'data' => [
                            'task_title' => $task->title,
                            'project_name' => $project->name,
                        ],
                        'created_at' => $task->created_at,
                    ]);

                    // Create activity log for completed tasks
                    if ($task->status === 'completed') {
                        UserActivityLog::create([
                            'user_id' => $randomUser->id,
                            'action' => 'completed',
                            'model_type' => 'Task',
                            'model_id' => $task->id,
                            'data' => [
                                'task_title' => $task->title,
                                'project_name' => $project->name,
                            ],
                            'created_at' => $task->updated_at,
                        ]);
                    }
                }
            }

            // Create activity log for project creation
            if ($users->count() > 0) {
                $randomUser = $users->random();
                UserActivityLog::create([
                    'user_id' => $randomUser->id,
                    'action' => 'created',
                    'model_type' => 'Project',
                    'model_id' => $project->id,
                    'data' => [
                        'project_name' => $project->name,
                    ],
                    'created_at' => Carbon::now()->subDays(rand(20, 40)),
                ]);
            }
        }
    }
}
