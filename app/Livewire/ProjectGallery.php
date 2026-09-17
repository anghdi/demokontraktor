<?php

namespace App\Livewire;

use App\Models\Project;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProjectGallery extends Component
{
    public string $filter = 'Semua';

    public function setFilter(string $filter): void
    {
        $this->filter = $filter;
    }

    public function render(): View
    {
        $projectTypes = Project::query()->orderBy('project_type')->distinct()->pluck('project_type');
        $projects = Project::query()
            ->when($this->filter !== 'Semua', fn ($query) => $query->where('project_type', $this->filter))
            ->orderByDesc('is_featured')
            ->orderByDesc('year')
            ->get();

        return view('livewire.project-gallery', compact('projectTypes', 'projects'));
    }
}
