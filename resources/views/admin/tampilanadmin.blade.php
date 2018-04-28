@extends('layouts.headersidebar')
@section('content')
  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Barang</h2>
                        {{-- <h5>Welcome Jhon Deo , Love to see you back. </h5> --}}

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div align="right" class="col-md-12">
                   <a href="{{route('item.create')}}" class="btn btn-success">Tambah Barang</a>

                 </div>
                        <br>
                        <br>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="panel panel-default">

                        <div class="panel-heading">
                            Daftar Barang
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Stock</th>
                                            <th>Description</th>
                                            <th>Photo</th>
                                            <th>Location</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data as $index => $value)
                            <tr>
                              <td>{{++$index}}</td>
                              <td>{{$value->name}}</td>
                              <td>{{$value->stock}} set</td>
                              <td>{{$value->description}}</td>
                              {{-- <td><img src="{{asset('storage/'.$value->photo)}}" style="width: 100px"></td> --}}
                              <td><img src="{{asset('storage/'.$value->photo)}}" style="width: 100px"></td>
                              <td>{{$value->location}}</td>
                              <td>{{$value->price}}</td>
                              <td>
                                <table>
                                <a href="{{route('item.show',['item'=>$value->id])}}"><button class="btn btn-success">Show</button></a>
                               &nbsp;
                               <a href="{{route('item.edit',['item'=>$value->id])}}"><button class="btn btn-warning">Edit</button></a>
                              &nbsp;
                              <form action="{{route('item.destroy',['item' => $value->id])}}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger">Delete</button>
                                      </form></table>
                              </td>
                              @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                      </form>




    </div>


                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->

            </div>
                <!-- /. ROW  -->
                {{-- <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com
                        </p>
                    </div>
                </div> --}}
                <!-- /. ROW  -->

             <!-- /. PAGE INNER  -->
            </div>
@endsection
