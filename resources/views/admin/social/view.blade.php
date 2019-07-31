@extends('admin.layout.master')
@section('content')
          

    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Social</h1>
    <a href="{{ url('/admin/social/add') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add social</a>
    
  </div>

<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Social Links</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Bootstrap Class</th>
                      <th>Alernetive text</th>
                      <th>Social Link</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($socials as $social)
                    <tr>
                      <td>
                        {{ $social->id }}
                      </td>
                      <td>
                        {{ $social->title }}
                      </td>
                      <td>
                        {{ $social->icon_class }}
                      </td>
                      <td>
                        {{ $social->alt }}
                      </td>
                      <td>
                        <a href="https://{{ $social->link }}">{{ $social->link }}</a>
                      </td>
                      <td>
                        <a href="{{url('/admin/social/edit')}}/{{ $social->id }}" class="btn btn-info">Edit</a> <a href="{{url('/admin/social/delete')}}/{{ $social->id }}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@endsection