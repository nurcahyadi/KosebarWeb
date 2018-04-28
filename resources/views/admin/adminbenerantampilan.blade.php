@extends('layouts.headersidebaradmin')
@section('content')
  <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Daftar Penjual</h2>
                        {{-- <h5>Welcome Jhon Deo , Love to see you back. </h5> --}}

                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 {{-- <div align="right" class="col-md-12">
                   <a href="{{route('item.create')}}" class="btn btn-success">Tambah Barang</a>

                 </div> --}}
                        <br>
                        <br>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="panel panel-default">

                        <div class="panel-heading">
                            Daftar Penjual
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Photo</th>
                                            <th>Nama Penjual</th>
                                            <th>Store Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>NIK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($data as $index => $value)
                            <tr>
                              <td>{{++$index}}</td>
                              <td><img src="{{asset('storage/'.$value->photo)}}" style="width: 100px"></td>
                              <td>{{$value->name}}</td>
                              <td>{{$value->store_name}}</td>
                              <td>{{$value->email}}</td>
                              {{-- <td><img src="{{asset('storage/'.$value->photo)}}" style="width: 100px"></td> --}}

                              <td>{{$value->phone}}</td>
                              <td>{{$value->address}}</td>
                              <td>{{$value->NIK}}</td>
                              <td>
                                <table>
                              <form action="{{route('admin.destroy',['admin' => $value->id])}}" method="post">
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
