@extends('backend.index');

@section('title', 'Category add')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add new category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="{{url('/insert-update-category')}}" method="post">

                                        {{csrf_field()}}
                                        <input type="hidden" name="catid" value="{{$category_select->catid}}">
                                        <div class="form-group">
                                            <label>Category name</label>
<input class="form-control" type="text" value="{{$category_select->category_name}}" name="category_name" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
    
    

@endsection