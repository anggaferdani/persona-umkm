@extends('templates.pages')
@section('title', isset($title) ? $title : 'Dashboard')
@section('content')
<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">Dashboard</h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="card bg-primary text-primary-fg">
      <div class="card-stamp">
        <div class="card-stamp-icon bg-white text-primary">
          <!-- Download SVG icon from http://tabler-icons.io/i/star -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path></svg>
        </div>
      </div>
      <div class="card-body">
        <h3 class="card-title">Lorem ipsum dolor sit amet consectetur</h3>
        <p>Maecenas urna volutpat nunc per vestibulum fusce sapien habitant ridiculus, nisl proin justo duis metus hac laoreet ut imperdiet, leo ornare condimentum dictumst congue porta netus phasellus. Fermentum condimentum nullam bibendum imperdiet massa ut netus inceptos tristique, nisi suscipit mus vulputate sem vestibulum per sollicitudin lectus ac, aenean sociosqu duis class mauris consequat est ad. Natoque vel non viverra pellentesque porta fringilla suspendisse imperdiet, placerat lectus iaculis integer nisi molestie leo, nisl vehicula tellus nam erat risus semper.</p>
      </div>
    </div>
  </div>
</div>
@endsection