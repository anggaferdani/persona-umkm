<div wire:ignore.self class="modal modal-blur fade" id="createModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="createProject" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create project</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Project name</label>
          <input type="text" wire:model="project_name" class="form-control" name="" placeholder="Project name">
          @error('project_name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="">
          <label class="form-label required">Project description</label>
          <textarea wire:model="project_description" class="form-control" rows="6" placeholder="Project description"></textarea>
          @error('project_description')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Submit</button>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="showModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Show project</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Project name</label>
          <input disabled type="text" wire:model="project_name" class="form-control" name="" placeholder="Project name">
          @error('project_name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="">
          <label class="form-label required">Project description</label>
          <textarea disabled wire:model="project_description" class="form-control" rows="6" placeholder="Project description"></textarea>
          @error('project_description')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="updateProject" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit project</h5>
        <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label required">Project name</label>
          <input type="text" wire:model="project_name" class="form-control" name="" placeholder="Project name">
          @error('project_name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="">
          <label class="form-label required">Project description</label>
          <textarea wire:model="project_description" class="form-control" rows="6" placeholder="Project description"></textarea>
          @error('project_description')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" wire:click="closeModal" class="btn" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">Submit</button>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deleteProject" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($project->id)){{ $project_id }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deleteSelectedModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deleteSelectedProject" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($project->id)){{ count($selectedProjects) }}@endif records?</h3>
        <div class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="restoreModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="restoreProject" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
        <h3>Are you sure you want to restore this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($project->id)){{ $project_id }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-success w-100" data-bs-dismiss="modal">Restore</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deletePermanentlyModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deletePermanently" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete permanently this record?</h3>
        <div class="text-muted">Lorem ipsum dolor @if(!empty($project->id)){{ $project_id }}@endif sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete permanently</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="restoreSelectedModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="restoreSelectedProject" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-success"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-green icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path><path d="M9 12l2 2l4 -4"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($project->id)){{ count($selectedProjects2) }}@endif records?</h3>
        <div class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-success w-100" data-bs-dismiss="modal">Restore</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

<div wire:ignore.self class="modal modal-blur fade" id="deleteSelectedModalPermanently" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <form action="" wire:submit.prevent="deleteSelectedProjectPermanently" class="modal-content">
      <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-status bg-danger"></div>
      <div class="modal-body text-center py-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        <h3>Are you sure you want to delete this @if(!empty($project->id)){{ count($selectedProjects2) }}@endif records?</h3>
        <div class="text-muted">Lorem ipsum dolor sit amet consectetur adipiscing elit nam mollis, placerat vivamus natoque himenaeos suspendisse</div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
          <div class="row">
            <div class="col"><button type="button" wire:click="closeModal" class="btn w-100" data-bs-dismiss="modal">Cancel</button></div>
            <div class="col"><button type="submit" class="btn btn-danger w-100" data-bs-dismiss="modal">Delete</button></div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>