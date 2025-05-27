@extends('layouts.app')

@section('title', 'Projects - Task Manager')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">Projects</h1>
                <p class="mt-2 text-gray-600">Manage your projects and track their progress.</p>
            </div>
            <a href="{{ route('projects.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-blue-700 flex items-center">
                <i class="fas fa-plus mr-2"></i>
                New Project
            </a>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="projects-grid">
            @forelse($projects as $project)
                <div class="bg-white shadow rounded-lg overflow-hidden project-card" data-project-id="{{ $project->id }}">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-lg font-medium text-gray-900">{{ $project->name }}</h3>
                            <div class="flex space-x-2">
                                <a href="{{ route('projects.edit', $project) }}" class="text-gray-400 hover:text-blue-600">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button onclick="deleteProject({{ $project->id }})"
                                    class="text-gray-400 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>

                        @if ($project->description)
                            <p class="text-gray-600 text-sm mb-4">{{ Str::limit($project->description, 100) }}</p>
                        @endif

                        <div class="flex items-center justify-between mb-4">
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ $project->tasks_count }}</span> tasks
                            </div>
                            <div class="text-sm text-gray-500">
                                <span class="font-medium">{{ $project->completed_tasks_count }}</span> completed
                            </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mb-4">
                            <div class="flex items-center justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Progress</span>
                                <span class="text-sm text-gray-500">
                                    {{ $project->tasks_count > 0 ? round(($project->completed_tasks_count / $project->tasks_count) * 100) : 0 }}%
                                </span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full"
                                    style="width: {{ $project->tasks_count > 0 ? ($project->completed_tasks_count / $project->tasks_count) * 100 : 0 }}%">
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-xs text-gray-500">Created {{ $project->created_at->diffForHumans() }}</span>
                            <a href="{{ route('projects.show', $project) }}"
                                class="text-blue-600 hover:text-blue-500 text-sm font-medium">
                                View Details <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full">
                    <div class="text-center py-12">
                        <div class="mx-auto h-12 w-12 text-gray-400">
                            <i class="fas fa-folder-open text-4xl"></i>
                        </div>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No projects</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new project.</p>
                        <div class="mt-6">
                            <a href="{{ route('projects.create') }}"
                                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                                <i class="fas fa-plus mr-2"></i>
                                New Project
                            </a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    @push('scripts')
        <script>
            function deleteProject(projectId) {
                if (confirm('Are you sure you want to delete this project? This will also delete all associated tasks.')) {
                    $.ajax({
                        url: `/projects/${projectId}`,
                        type: 'DELETE',
                        success: function(response) {
                            if (response.success) {
                                $(`.project-card[data-project-id="${projectId}"]`).fadeOut(300, function() {
                                    $(this).remove();

                                    // Check if no projects left
                                    if ($('.project-card').length === 0) {
                                        location.reload();
                                    }
                                });

                                // Show success message
                                showNotification('Project deleted successfully!', 'success');
                            }
                        },
                        error: function() {
                            showNotification('Error deleting project. Please try again.', 'error');
                        }
                    });
                }
            }

            function showNotification(message, type) {
                const bgColor = type === 'success' ? 'bg-green-100 border-green-400 text-green-700' :
                    'bg-red-100 border-red-400 text-red-700';
                const notification = $(`
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-4">
            <div class="${bgColor} px-4 py-3 rounded relative" style="display: none;">
                <span class="block sm:inline">${message}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer" onclick="$(this).parent().parent().fadeOut()">
                    <i class="fas fa-times"></i>
                </span>
            </div>
        </div>
    `);

                $('main').prepend(notification);
                notification.find('div').fadeIn();

                setTimeout(() => {
                    notification.fadeOut();
                }, 5000);
            }
        </script>
    @endpush
@endsection
