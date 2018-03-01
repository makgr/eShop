@extends('backend.index')

@section('title', 'Category list')

@section('content')



  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            category list
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive" id="category_list">
                                @if($category_all->count() >0)
                                

                               
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($category_all as $row)

                                        
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$row->category_name}}</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{url('category-edit/'.$row->catid)}}">Edit</a>
                                                <a class="btn btn-danger" onclick="confirm_category_delete({{$row->catid}})">Delete</a>
                                            </td>
                                        </tr>

                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>

                                @else
                                    <h3>No record found</h3>
                                @endif

                                 
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper --> 



        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="category_delete_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <h5>Are you sure? you want to delete this category.</h5>
                    <input type="hidden" name="hcatid" id="hcatid" value="0">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" onclick="category_delete()">Yes</button>
              </div>
            </div>
          </div>
        </div> 

@endsection