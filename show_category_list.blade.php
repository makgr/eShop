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