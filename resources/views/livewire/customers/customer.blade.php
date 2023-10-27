<div>
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">Customer</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-body py-3">
              <div class="d-flex flex-column flex-md-row align-items-center gap-2 gap-md-0 justify-content-between">
                <div class="btn-list w-100">
                  @if($displayByStatus == 1)
                    <button type="button" @if($bulkDisabled)@disabled(true)@endif class="btn" data-bs-toggle="modal" data-bs-target="#deleteSelectedModal">Delete {{ count($selectedCustomers) }} selected</button>
                  @elseif($displayByStatus == 2)
                    <button type="button" @if($bulkDisabled2)@disabled(true)@endif class="btn" data-bs-toggle="modal" data-bs-target="#restoreSelectedModal">Restore {{ count($selectedCustomers2) }} selected</button>
                    <button type="button" @if($bulkDisabled2)@disabled(true)@endif class="btn" data-bs-toggle="modal" data-bs-target="#deleteSelectedModalPermanently">Delete {{ count($selectedCustomers2) }} selected permanently</button>
                  @endif
                </div>
                <div class="d-flex w-100 flex-md-row flex-column gap-2 justify-content-end">
                  <div class="col-md-3">
                    <select wire:model="sortBy" name="" class="form-select">
                      <option value="DESC">DESC</option>
                      <option value="ASC">ASC</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <select wire:model="pageLength" name="" class="form-select">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <select wire:model="displayByStatus" name="" class="form-select">
                      <option value="1">Active</option>
                      <option value="2">Inactive</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <input type="text" wire:model="search" class="form-control" placeholder="Search" aria-label="Search invoice">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body border-bottom py-3">
              <label class="form-label required">Survei Pelanggan (Responses).xlsx</label>
              <form action="" method="post" wire:submit.prevent="importCustomer" class="row mb-0 g-0 g-md-2 gap-2 gap-md-0" enctype="multipart/form-data">
                <div class="col-md-11">
                  <input type="file" wire:model="survei_pelanggan" class="form-control @error('survei_pelanggan') is-invalid @enderror" placeholder="" aria-label="">
                </div>
                <div class="col-md-1 mt-auto">
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
              </form>
              @error('survei_pelanggan')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="table-responsive">
              <table class="table table-vcenter card-table datatable">
                <thead>
                  <tr>
                    <th>
                      @if($displayByStatus == 1)
                        <input type="checkbox" wire:model="selectAll" class="form-check-input m-0 align-middle" aria-label="Select all invoices">
                      @elseif($displayByStatus == 2)
                        <input type="checkbox" wire:model="selectAll2" class="form-check-input m-0 align-middle" aria-label="Select all invoices">
                      @endif
                    </th>
                    <th>No.</th>
                    <th>Action</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Pendidikan</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($customers as $customer)
                    <tr>
                      <td>
                        @if($displayByStatus == 1)
                          <input type="checkbox" wire:model="selectedCustomers" value="{{ $customer->id }}" class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                        @elseif($displayByStatus == 2)
                          <input type="checkbox" wire:model="selectedCustomers2" value="{{ $customer->id }}" class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice">
                        @endif
                      </td>
                      <td>{{ $customers->firstItem() + $loop->index }}</td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <button type="button" wire:click="selectCustomerId({{ $customer->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#showModal">Show</button>
                          @if($displayByStatus == 1)
                            <button type="button" wire:click="selectCustomerId({{ $customer->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                            <button type="button" wire:click="selectCustomerId({{ $customer->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                          @elseif($displayByStatus == 2)
                            <button type="button" wire:click="selectCustomerId({{ $customer->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#restoreModal">Restore</button>
                            <button type="button" wire:click="selectCustomerId({{ $customer->id }})" class="btn" data-bs-toggle="modal" data-bs-target="#deletePermanentlyModal">Delete permanently</button>
                          @endif
                        </div>
                      </td>
                      <td class="small">{{ $customer->usia }}</td>
                      <td class="small">{{ $customer->jenis_kelamin }}</td>
                      <td class="small">{{ $customer->pekerjaan }}</td>
                      <td class="small">{{ $customer->pendidikan }}</td>
                    </tr>
                  @empty
                  <tr>
                    <td class="text-center" colspan="6">No records found</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              <ul class="pagination m-0 ms-auto">
                @if($customers->hasPages())
                  {{ $customers->links() }}
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

  @include('livewire.customers.modal')
</div>

@push('scripts')
<script type="text/javascript">
  Livewire.on('close-modal', postId => {
    $('#editModal').modal('hide');
    $('#deleteModal').modal('hide');
  });
</script>
@endpush