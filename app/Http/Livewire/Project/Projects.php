<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public $project_id;

    public $project_name;
    public $project_description;
    public $status;

    public $selectedProjects = [];
    
    public $selectAll = false;
    public $bulkDisabled = true;

    public function rules(){
        return [
            'project_name' => 'required|string',
            'project_description' => 'required|string',
        ];
    }

    public function updated($fields){
        $this->validateOnly($fields);
    }

    public function createProject(){
        $request = $this->validate();

        Project::create($request);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editProject($project_id){
        $project = Project::find($project_id);

        if($project){
            $this->project_id = $project->id;
            $this->project_name = $project->project_name;
            $this->project_description = $project->project_description;
        }else{
            return redirect()->route('superadmin.project');
        }
    }

    public function updateProject(){
        $request = $this->validate();

        Project::where('id', $this->project_id)->update([
            'project_name' => $request['project_name'],
            'project_description' => $request['project_description'],
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteProject($project_id){
        $project = Project::find($project_id);

        if($project){
            $this->project_id = $project->id;
        }else{
            return redirect()->route('superadmin.project');
        }
    }
    
    public function destroyProject(){
        Project::where('id', $this->project_id)->update([
            'status' => 2,
        ]);

        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteSelectedProject(){
        Project::whereIn('id', $this->selectedProjects)->update([
            'status' => 2,
        ]);

        $this->selectedProjects = [];
        $this->selectAll = false;
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updatedSelectAll($value){
        if($value){
            $this->selectedProjects = Project::where('status', 1)->pluck('id');
        }else{
            $this->selectedProjects = [];
        }
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function resetInput(){
        $this->project_name = '';
        $this->project_description = '';
    }

    public function render()
    {
        $projects = Project::where('project_name', 'like', '%'.$this->search.'%')->where('status', 1)->orderBy('id', 'DESC')->paginate(5);
        $this->bulkDisabled = count($this->selectedProjects) < 1;

        return view('livewire.project.projects', [
            'projects' => $projects,
        ]);
    }
}
