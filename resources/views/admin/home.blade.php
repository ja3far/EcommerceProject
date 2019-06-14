@extends('admin.index')

@section('content')
<!-- TO DO List -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <i class="ion ion-clipboard mr-1"></i>
        To Do List
      </h3>

      <div class="card-tools">
        <ul class="pagination pagination-sm">
          <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
        </ul>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <ul class="todo-list">
        <li>
          <!-- drag handle -->
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <!-- checkbox -->
          <input type="checkbox" value="" name="">
          <!-- todo text -->
          <span class="text">Design a nice theme</span>
          <!-- Emphasis label -->
          <small class="badge badge-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
          <!-- General tools such as edit or delete-->
          <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <input type="checkbox" value="" name="">
          <span class="text">Make the theme responsive</span>
          <small class="badge badge-info"><i class="fa fa-clock-o"></i> 4 hours</small>
          <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <input type="checkbox" value="" name="">
          <span class="text">Let theme shine like a star</span>
          <small class="badge badge-warning"><i class="fa fa-clock-o"></i> 1 day</small>
          <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <input type="checkbox" value="" name="">
          <span class="text">Let theme shine like a star</span>
          <small class="badge badge-success"><i class="fa fa-clock-o"></i> 3 days</small>
          <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <input type="checkbox" value="" name="">
          <span class="text">Check your messages and notifications</span>
          <small class="badge badge-primary"><i class="fa fa-clock-o"></i> 1 week</small>
          <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
        </li>
        <li>
          <span class="handle">
            <i class="fa fa-ellipsis-v"></i>
            <i class="fa fa-ellipsis-v"></i>
          </span>
          <input type="checkbox" value="" name="">
          <span class="text">Let theme shine like a star</span>
          <small class="badge badge-secondary"><i class="fa fa-clock-o"></i> 1 month</small>
          <div class="tools">
            <i class="fa fa-edit"></i>
            <i class="fa fa-trash-o"></i>
          </div>
        </li>
      </ul>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> Add item</button>
    </div>
  </div>
  <!-- /.card -->
@endsection
