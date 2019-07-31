@extends('admin.layout.master')
@section('content')    
    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Setting</h1>
    <a href="{{ url('/admin/settings/edit') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Edit Infirmation</a>
  </div>

     
<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">General Information</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Site Name</th>
                      <th>Email</th>
                      <th>Title</th>
                      <th>About</th>
                      <th>Location </th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <tr>
                      <td>
                        {{ $info->name }}
                      </td>
                      <td>
                        {{ $info->sitename }}
                      </td>
                      <td>
                        {{ $info->email }}
                      </td>
                      <td>
                        {{ $info->title }}
                      </td>
                      <td>
                        {{ $info->about }}
                      </td>
                      <td>
                        {{ $info->location }}
                      </td>
                      <td>
                        <img style="height: 200px;" src="../img/{{ $info->image }}" alt="">
                      </td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection
