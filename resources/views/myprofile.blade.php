@extends('layouts.lay')

@section('content')
  <!-- Sidebar -->
<div class="row">
	<div class="col-lg-2">
	  	<nav class="navbar navbar-inverse navbar-fixed-left" style="">
			<ul>
				<li class="list1 active"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="myprofile">  My Profile</a></li>
			    <li class="list2"><i class="far fa-list-alt" style="margin-right: 5px;"></i><a href="post">  Post Ads</a></li>
				<li class="list3"><i class="fas fa-info-circle" style="margin-right: 5px;"></i><a href="myinfo"> My Info</a></li>
				<!--<li class="list4"><i class="far fa-bell" style="margin-right: 5px;"></i><a href="#"> Alerts</a></li> -->
				<li class="list5"><i class="fas fa-eraser" style="margin-right: 5px;"></i><a href="" data-toggle="modal" data-target="#myModal"> Delete Account</a>
					<div id="myModal" class="modal fade" role="dialog">
					    <div class="modal-dialog">
					       <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						           <button type="button" class="close" data-dismiss="modal">&times;</button>
						           <h4 class="modal-title" style="color: black;text-align: center;">Are you sure you want to delete account ?</h4>
						        </div>
							    <div class="modal-body">
							      	<center>
									    <button type="button" class="btn btn-danger byes">Yes</button>
									    <button type="button" class="btn btn-success bno" data-dismiss="modal">No</button>
									</center>        
							    </div>
						    </div>
					    </div>
					</div>
				</li>
			</ul>
		</nav>
	</div>  
	<div class="col-lg-10">
	  	<center><h3 style="color: #337AB7;">My Posts</h3></center>
	
	<div class="row">
    <div class="col-lg-12">
    <!-- Prodcut list -->
    @if(!empty($products))
        
        <div class="row">
            <div class="col-md-offset col-md-12">
                @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                
                <div class="pull-left">
                    <h2>Product List </h2>
                </div>
                <div class="pull-right">
                   
                </div>
                <br/> <br/>
                <table class="table table-striped task-table">
                    <!-- Table Headings -->
                     <thead>
                        <th width="5%">Sno</th>
                        <th width="10%">pictures</th>
                        <th width="10%">Category</th>
                        <th width="10%">Subcategory</th>
                        <th width="10%">Title</th>
                        <th width="10%">Description</th>
                        <th width="10%">Quantity</th>
                        <th width="10%">Price</th>
                        <th width="10%">City</th>
                        <th width="10%">State</th>
                        <th width="10%">Address</th>
                        <th width="30%">Action</th>
                    </thead>
                    <!-- Table Body -->
                    <tbody>
                    @php( $sno = 1 )
                    @foreach($products as $product)
                        <tr>
                            <td class="table-text">
                                <div>{{ $sno++ }}</div>
                            </td>

                            <td class="table-text">
                                <div>{{ $product->file }}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->category}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->subcategory}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->title}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->description}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->quantity}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->price}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->city}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->state}}</div>
                            </td>
                             <td class="table-text">
                                <div>{{$product->address}}</div>
                            </td>

                            <td>
                                <a href="{{ route('product.show', $product->id) }}" class="btn btn-success"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i></a>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a>
                                <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    </div>
    </div>
</div>
</div>
@endsection