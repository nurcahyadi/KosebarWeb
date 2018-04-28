@extends('layouts.headersidebar')

@section('content')
  <div id="page-wrapper" >
              <div id="page-inner">
                  <div class="row">
                      <div class="col-md-12">
                       <h2>Edit {{$data->name}}</h2>

                      </div>
                  </div>
                   <!-- /. ROW  -->
                   <hr />
                 <div class="row">
                  <div class="col-md-12">
                      <!-- Form Elements -->
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Data Barang
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-12">
                                    <form  action="{{route('item.update',['item'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                                      {{ csrf_field() }}
                                      <input type="hidden" name="_method" value="PUT">
                                          <div class="form-group">
                                              <label>Nama Barang</label>
                                              <input type="text" class="form-control" name="name" id="name" placeholder="masukan nama barang" value="{{$data->name}}"/>
                                          </div>
                                          <div class="form-group">
                                              <label>Stock</label>
                                              <input type="number" class="form-control" name="stock" id="stock" placeholder="masukan jumlah barang" value="{{$data->stock}}"/>
                                          </div>
                                          <div class="form-group">
                                              <label>Deskripsi</label>
                                              <textarea class="form-control" name="description" id="description" placeholder="masukan deskripsi barang" >{{$data->description}}</textarea>
                                          </div>

                                          <div class="form-group">
                                              <label for="photo">Photo</label>
                                              <input type="file" id="photo" name="photo" >
                                          </div>
                                          <div class="form-group">
                                              <label>Lokasi</label>
                                              <input type="text" class="form-control" name="location" id="location" placeholder="masukan lokasi barang" value="{{$data->location}}"/>
                                          </div>
                                          <div class="form-group">
                                              <label>Harga</label>
                                              <input type="number" class="form-control" name="price" id="price" placeholder="masukan harga barang" value="{{$data->price}}"/>
                                          </div>
                                            {{-- <a href="{{route('admin.tampilanadmin')}}" class="btn btn-primary">Save</a> --}}
                                          <button type="submit" name="button" class="btn btn-primary">Update</button>
                                    </form>


      </div>


                              </div>
                          </div>
                      </div>
                       <!-- End Form Elements -->
                  </div>
              </div>

      </div>
               <!-- /. PAGE INNER  -->
              </div>

@endsection
