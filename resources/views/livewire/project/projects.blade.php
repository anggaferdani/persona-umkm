<div>
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">Project</h2>
        </div>
        <div class="col-auto ms-auto d-print-none">
          <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Create</a>
          <a href="#" class="btn btn-danger">Deleted</a>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-body border-bottom py-3">
              <div class="d-flex align-items-center">
                <div class="btn-list flex-nowrap me-2 me-md-0">
                  <button type="button" @if($bulkDisabled)@disabled(true)@endif class="btn" data-bs-toggle="modal" data-bs-target="#deleteSelectedModal">Delete {{ count($selectedProjects) }} selected record</button>
                </div>
                <div class="ms-auto text-muted">
                  Search :
                  <div class="d-inline-block">
                    <input type="text" wire:model="search" class="form-control form-control-sm" aria-label="Search invoice">
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-vcenter card-table datatable">
                <thead>
                  <tr>
                    <th><input type="checkbox" wire:model="selectAll" class="form-check-input m-0 align-middle" aria-label="Select all invoices"></th>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Project Name</th>
                    <th>Project Description</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($projects as $project)
                    <tr>
                      <td><input type="checkbox" wire:model="selectedProjects" value="{{ $project->id }}" class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                      <td>{{ $projects->firstItem() + $loop->index }}</td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" class="btn">Show</a>
                          <button type="button" wire:click="editProject({{ $project->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                          <a href="#" wire:click="deleteProject({{ $project->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                        </div>
                      </td>
                      <td>{{ $project->project_name }}</td>
                      <td>{{ $project->project_description }}</td>
                    </tr>
                  @empty
                  <tr>
                    <td class="text-center" colspan="5">No records found</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              <ul class="pagination m-0 ms-auto">
                @if($projects->hasPages())
                  {{ $projects->links() }}
                @else
                  <li class="page-item">No more records</li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('livewire.project.modal')

</div>
@push('scripts')
<script type="text/javascript">
  Livewire.on('close-modal', postId => {
    $('#createModal').modal('hide');
    $('#editModal').modal('hide');
    $('#deleteModal').modal('hide');
  });
</script>
@endpush
