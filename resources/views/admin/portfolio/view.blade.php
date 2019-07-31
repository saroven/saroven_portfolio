@extends('admin.layout.master')

@section('content')

    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Portfolio</h1>
    <a href="{{ url('/admin/portfolio/add') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Portfolio</a>
    
  </div>

<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Portfolios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Project Name</th>
                      <th>Description</th>
                      <th>Project Link</th>
                      <th>Image</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($portfolios as $portfolio)
                    <tr>
                      <td>
                        {{ $portfolio->id }}
                      </td>
                      <td>
                        {{ $portfolio->name }}
                      </td>
                      <td>
                        {{ $portfolio->description }}
                      </td>
                      <td>
                        <a href="https://{{ $portfolio->link }}" target="_blank">{{ $portfolio->link }}</a>
                      </td>
                      <td>
                        <img src="../img/portfolio/{{ $portfolio->image }}" alt="{{ $portfolio->name }}" style="width: 100px;height: 80px;">
                      </td>
                      <td>
                        <a href="{{url('/admin/portfolio/edit')}}/{{ $portfolio->id }}" class="btn btn-info">Edit</a> <a href="{{url('/admin/portfolio/delete')}}/{{ $portfolio->id }}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

    @endsection