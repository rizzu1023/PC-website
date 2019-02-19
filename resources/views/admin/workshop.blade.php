@extends('admin.master')

@section('title')
Workshops
@stop

@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Tutorials</h1>
          <br>
          <a href="{{ route('workshop-add') }}" class="btn btn-sm btn-primary">Add Workshop</a>
           @if(Session::has('success'))
            <div class="alert alert-success alert-success" style="margin-top: 10px; margin-bottom: 0px;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ strtoupper(Session::get('success'))  }}
            </div>
          @elseif(Session::has('error'))   
                <div style="margin-top: 10px;margin-bottom: 0px;" class="alert alert-danger alert-error">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ strtoupper (Session::get('error'))  }}
                </div>   
          @endif
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Title</th>
                    <th width="25%">About</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr> 
                  @foreach($workshops as $workshop)
                    <tr>
                      <td>{{$workshop->title}}</td>
                      <td>{{ $workshop->about_worjshop }}</td>
                      <td><a href="#" target="_blank">#</td>
                      <td>
                        @if($workshop->status=="active")
                          <span class="badge bg-green">Active</span>
                        @else
                          <span class="badge bg-red">Inactive</span>
                        @endif
                      </td>
                      <td>
                        <div class="btn-group">
                          <a href="{{ route('workshop-edit', $workshop->id) }}" class="btn btn-info btn-sm">
                            Edit
                          </a>
                          @if($workshop->status=="active")
                            <a href="{{ route('workshop-disbale', $workshop->id)}}" class="btn btn-sm btn-warning">
                              Deactivate
                            </a>
                          @else 
                            <a href="{{ route('workshop-enable', $workshop->id) }}" class="btn btn-sm btn-success">
                              Activate
                            </a>
                          @endif
                          <a href="{{ route('workshop-delete', $workshop->id) }}" class="btn btn-sm btn-danger">
                            Delete
                          </a>
                        </div>
                      </td>
                    </tr>
                  @endforeach 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    <script src="/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="/admin/dist/js/cloudinarywidget.js"></script>
    <script src="/admin/dist/js/main.js"></script>
@stop     