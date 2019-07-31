

@extends('admin.layout.master')
@section('content')

  
          

    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">message</h1>
    <!-- <a href="{{ url('/admin/message/add') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add message</a> -->
    
  </div>

<!-- Content Row -->
  <!-- <div class="row"> -->
    
 <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Message</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Message</th>
                      <th>Recived</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($messages as $message)
                    <tr>
                      <td>
                        {{ $message->id }}
                      </td>
                      <td>
                        {{ $message->name }}
                      </td>
                      <td>
                        {{ $message->email }}
                      </td>
                      <td>
                        {{ $message->mobile }}
                      </td>
                      <td>
                        {{ $message->text }}
                      </td>
                      <td>
                        {{ $message->created_at }}
                      </td>
                      <td>
                      <a href="{{url('/admin/message/delete')}}/{{ $message->id }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@endsection