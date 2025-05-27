<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\UserActivityLog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalProjects = Project::count();
        $totalTasks = Task::count();
        $completedTasks = Task::completed()->count();
        $pendingTasks = Task::pending()->count();

        $recentProjects = Project::latest()->take(5)->get();
        $recentTasks = Task::with('project')->latest()->take(5)->get();
        $recentActivities = UserActivityLog::with('user')
            ->latest()
            ->take(10)
            ->get();

        $tasksByStatus = [
            'pending' => $pendingTasks,
            'completed' => $completedTasks,
        ];

        $projectsWithCompletion = Project::withCount(['tasks', 'tasks as completed_tasks_count' => function ($query) {
            $query->where('status', 'completed');
        }])->get()->map(function ($project) {
            $project->completion_percentage = $project->tasks_count > 0
                ? round(($project->completed_tasks_count / $project->tasks_count) * 100, 2)
                : 0;
            return $project;
        });

        return view('dashboard', compact(
            'totalProjects',
            'totalTasks',
            'completedTasks',
            'pendingTasks',
            'recentProjects',
            'recentTasks',
            'recentActivities',
            'tasksByStatus',
            'projectsWithCompletion'
        ));
    }
}
