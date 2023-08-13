<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project as ProjectModel;
use Livewire\Component;
use Livewire\WithPagination;

class Project extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search = '';
    
    public $project_id;

    public $project_name;
    public $project_description;
    public $status;

    public $selectedProjects = [];
    public $selectedProjects2 = [];
    
    public $pageLength = 5;
    public $sortBy = 'DESC';
    public $displayByStatus = 1;

    public $selectAll = false;
    public $selectAll2 = false;
    public $bulkDisabled = true;
    public $bulkDisabled2 = true;

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

        ProjectModel::create($request);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function selectProjectId($project_id){
        $project = ProjectModel::find($project_id);

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

        ProjectModel::where('id', $this->project_id)->update([
            'project_name' => $request['project_name'],
            'project_description' => $request['project_description'],
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteProject(){
        ProjectModel::where('id', $this->project_id)->update([
            'status' => 2,
        ]);

        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteSelectedProject(){
        ProjectModel::whereIn('id', $this->selectedProjects)->update([
            'status' => 2,
        ]);

        $this->selectedProjects = [];
        $this->selectAll = false;
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updatedSelectAll($value){
        if($value){
            $this->selectedProjects = ProjectModel::where('status', 1)->pluck('id');
        }else{
            $this->selectedProjects = [];
        }
    }

    public function restoreProject(){
        ProjectModel::where('id', $this->project_id)->update([
            'status' => 1,
        ]);

        $this->dispatchBrowserEvent('close-modal');
    }

    public function deletePermanently(){
        ProjectModel::where('id', $this->project_id)->delete();

        $this->dispatchBrowserEvent('close-modal');
    }

    public function restoreSelectedProject(){
        ProjectModel::whereIn('id', $this->selectedProjects2)->update([
            'status' => 1,
        ]);

        $this->selectedProjects2 = [];
        $this->selectAll2 = false;
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteSelectedProjectPermanently(){
        ProjectModel::whereIn('id', $this->selectedProjects2)->delete();

        $this->selectedProjects2 = [];
        $this->selectAll2 = false;
        $this->dispatchBrowserEvent('close-modal');
    }

    public function updatedSelectAll2($value){
        if($value){
            $this->selectedProjects2 = ProjectModel::where('status', 2)->pluck('id');
        }else{
            $this->selectedProjects2 = [];
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
        $projects = ProjectModel::where('project_name', 'like', '%'.$this->search.'%')->where('status', $this->displayByStatus)->orderBy('id', $this->sortBy)->paginate($this->pageLength);
        $this->bulkDisabled = count($this->selectedProjects) < 1;
        $this->bulkDisabled2 = count($this->selectedProjects2) < 1;

        return view('livewire.projects.project', [
            'projects' => $projects,
        ]);
    }
}
