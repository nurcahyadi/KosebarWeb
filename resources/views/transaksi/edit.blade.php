@extends('layouts.headersidebar')

@section('content')
  <div id="page-wrapper" >
              <div id="page-inner">
                  <div class="row">
                      <div class="col-md-12">
                       <h2>Edit Transaksi</h2>

                      </div>
                  </div>
                   <!-- /. ROW  -->
                   <hr />
                 <div class="row">
                  <div class="col-md-12">
                      <!-- Form Elements -->
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              Data Transaksi
                          </div>
                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-12">
                                    <form  action="{{route('transaksi.update', ['transaksi'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                      {{ csrf_field() }}
                                      <input type="hidden" name="_method" value="PUT">
                                          <div class="form-group">
                                              <label>User ID</label>
                                              <input type="text" class="form-control" name="id_user" id="id_user" value="{{$data->id_user}}" disabled/>
                                          </div>
                                          <div class="form-group">
                                              <label>Item ID</label>
                                              <input type="number" class="form-control" name="item_id" id="item_id" value="{{$data->item_id}}" disabled/>
                                          </div>

                                          {{-- <div class="form-group">
                                              <label for="photo">Photo</label>
                                              <input type="file" id="photo" name="photo" >
                                          </div> --}}

                                          <div class="form-group">
                                              <label>Metode Pembayaran</label>
                                              <input type="text" class="form-control" name="metode_pembayaran" id="metode_pembayaran" value="{{$data->metode_pembayaran}}" disabled/>
                                          </div>
                                          <div class="form-group">
                                              <label>Status</label>
                                              <select name="status">
                                                  <option value="Belum Dibayar" selected>Belum Dibayar</option>
                                                  <option value="Sudah Dibayar">Sudah Dibayar</option>
                                              </select>
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
