@extends('new.admin.templates.pages')
@section('title')
@section('header')
<h1>Image Template</h1>
@endsection
@section('content')
<div class="row">
  <div class="col-12">

    @if(Session::get('success'))
      <div class="alert alert-important alert-primary" role="alert">
        {{ Session::get('success') }}
      </div>
    @endif
  
    <div class="card">
      <div class="card-body">
        <div class="float-left">
          <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i></button>
        </div>
        <div class="float-right">
          <form id="filter" action="" method="GET">
            <div class="input-group">
              <input disabled type="text" class="form-control" placeholder="Search" name="search" id="search" value="">
            </div>
          </form>
        </div>

        <div class="clearfix mb-3"></div>

        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="align-items-center text-center text-nowrap">No.</th>
                <th class="align-items-center text-center text-nowrap">Category</th>
                <th class="align-items-center text-center text-nowrap">Contoh Template</th>
                <th class="align-items-center text-center text-nowrap">Template</th>
                <th class="align-items-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($imageTemplates as $imageTemplate)
                <tr>
                  <td class="align-items-center text-center text-nowrap">{{ ($imageTemplates->currentPage() - 1) * $imageTemplates->perPage() + $loop->iteration }}</td>
                  <td class="align-items-center text-center text-nowrap">{{ $imageTemplate->categoryImageTemplate->category }}</td>
                  <td class="align-items-center text-center text-nowrap"><img src="/image-template/contoh/{{ $imageTemplate->contoh }}" alt="" class="img-fluid" width="100"></td>
                  <td class="align-items-center text-center text-nowrap"><img src="/image-template/template/{{ $imageTemplate->template }}" alt="" class="img-fluid" width="100"></td>
                  <td class="align-items-center text-nowrap">
                    <form action="{{ route('admin.image-template.destroy', $imageTemplate->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="button" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#editModal{{ $imageTemplate->id }}"><i class="fas fa-pen"></i></button>
                      <button type="button" class="btn btn-icon btn-danger delete"><i class="fas fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="align-items-center text-center text-nowrap">Empty</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="float-right">
          {{ $imageTemplates->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="createModal" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.image-template.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">Category <span class="text-danger">*</span></label>
            <select class="form-control" name="category_image_template_id">
              <option disabled selected value="">Pilih</option>
              @foreach ($categoryImageTemplates as $categoryImageTemplate)
                <option value="{{ $categoryImageTemplate->id }}">{{ $categoryImageTemplate->category }}</option>
              @endforeach
            </select>
            @error('category')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="form-group">
            <label for="">Contoh Template <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="contoh">
            @error('contoh')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="form-group">
            <label for="">Template <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="template">
            @error('template')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="form-group">
            <label for="">Text <span class="text-danger">*</span></label>
            <textarea class="form-control" rows="3" name="text"></textarea>
            @error('text')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

@foreach($imageTemplates as $imageTemplate)
<div class="modal fade" id="editModal{{ $imageTemplate->id }}" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.image-template.update', $imageTemplate->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
            <label for="">Category <span class="text-danger">*</span></label>
            <select class="form-control" name="category_image_template_id">
              <option disabled selected value="">Pilih</option>
              @foreach ($categoryImageTemplates as $categoryImageTemplate)
                <option value="{{ $categoryImageTemplate->id }}" @if($imageTemplate->category_image_template_id == $categoryImageTemplate->id) @selected(true) @endif>{{ $categoryImageTemplate->category }}</option>
              @endforeach
            </select>
            @error('category')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="form-group">
            <label for="">Contoh Template <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="contoh" value="{{ $imageTemplate->contoh }}">
            <div><a href="/image-template/contoh/{{ $imageTemplate->contoh }}" target="_blank">{{ $imageTemplate->contoh }}</a></div>
            @error('contoh')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="form-group">
            <label for="">Template <span class="text-danger">*</span></label>
            <input type="file" class="form-control" name="template" value="{{ $imageTemplate->template }}">
            <div><a href="/image-template/template/{{ $imageTemplate->template }}" target="_blank">{{ $imageTemplate->template }}</a></div>
            @error('template')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="form-group">
            <label for="">Text <span class="text-danger">*</span></label>
            <textarea class="form-control" rows="3" name="text">{{ $imageTemplate->text }}</textarea>
            @error('text')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
@push('scripts')
<script>
  document.addEventListener("DOMContentLoaded", function() {
      document.getElementById('search').addEventListener('input', function() {
          document.getElementById('filter').submit();
      });
  });
</script>
<script>
  const urlParams = new URLSearchParams(window.location.search);
  const searchQuery = urlParams.get('search');

  document.addEventListener("DOMContentLoaded", function() {
      const searchInput = document.getElementById('search');

      if (searchQuery) {
          searchInput.value = searchQuery;
      }
  });
</script>
@endpush