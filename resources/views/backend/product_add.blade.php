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
                                   


                                     <form role="form" action="{{url('/insert-update-product')}}" method="post" enctype="multipart/form-data">
                                        
                                        {{csrf_field()}}
                                        <input type="hidden" name="product_id" value="0">
                                        <div class="form-group">
                                            <label>Category name</label>
                                           


                                            <select  class="form-control" name="product_category" id="product_category" >
                                                <option value="">Select category</option>

                                                @foreach($category_all as $cat_list)
                                                    <option value="{{$cat_list->catid}}">{{$cat_list->category_name}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input class="form-control" type="text" name="product_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Product price</label>
                                            <input class="form-control" type="text" name="product_price">
                                        </div>

                                        <div class="form-group">
                                            <label>Product image</label>
                                            <input class="form-control" type="file" name="product_image">
                                        </div>
                                        <div class="form-group">
                                            <label>Product details</label>

                                            <textarea class="form-control" rows="3" name="product_details"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product stock in</label>
                                            <input class="form-control" type="number" name="product_stock_in">
                                        </div>
                                        <div class="form-group">
                                            <label>Product status</label>
                                            

                                            <select class="form-control" name="product_status">
                                                <option value="0">Pending</option>
                                                <option value="1">Active</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" name="submit" class="btn btn-default">Submit</button>
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