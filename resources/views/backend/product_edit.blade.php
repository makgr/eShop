@extends('backend.index')

@section('title', 'Category add')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                   


                                     <form role="form" action="{{url('/insert-update-product')}}" method="post" enctype="multipart/form-data">
                                        
                                        {{csrf_field()}}
                                        <input type="hidden" name="product_id" value="{{$product_select->product_id}}">
                                        <div class="form-group">
                                            <label>Category name</label>
                                           


                                            <select  class="form-control" name="product_category" id="product_category" >
                                                <option value="">Select category</option>

                                                @foreach($category_all as $cat_list)

                                                    @if($product_select->product_category==$cat_list->catid)
                                                         <option value="{{$cat_list->catid}}" selected>{{$cat_list->category_name}}</option>
                                                    @else

                                                     <option value="{{$cat_list->catid}}">{{$cat_list->category_name}}</option>

                                                    @endif

                                                @endforeach
                                                
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Product name</label>
                                            <input class="form-control" type="text" name="product_name" value="{{$product_select->product_name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Product price</label>
                                            <input class="form-control" type="text" name="product_price" value="{{$product_select->product_price}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Product image</label>
                                            <input class="form-control" type="file" name="product_image">

                                            <img class="img_thumbnail" src="{{URL::asset('uploads/thumbs/'.$product_select->product_image)}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Product details</label>

                                            <textarea class="form-control" rows="3" name="product_details">{{$product_select->product_details}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Product stock in</label>
                                            <input class="form-control" type="number" name="product_stock_in" value="{{$product_select->product_stock_in}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Product status</label>
                                            

                                            <select class="form-control" name="product_status">

                                                @if($product_select->product_status==1)

                                                <option value="1">Active</option>
                                                <option value="0">Pending</option>
                                                @else
                                                <option value="0">Pending</option>
                                                <option value="1">Active</option>
                                                @endif
                                                
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