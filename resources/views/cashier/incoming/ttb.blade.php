


@extends('layouts.master')
@section('titile',' Cashier |  Bukti Timbang Barang ')
@section('content')




<div class="content-body">
  <div class="container-fluid">

    
 

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <!-- Logo & title -->
                                    <div class="clearfix">
                                        <div class="float-left">
                                            <div class="auth-logo">
                                                <div class="logo logo-dark">
                                                    <span class="logo-lg">
                                                        <img src="../logo.PNG" alt="" height="52">
                                                    </span>
                                                </div>
                            
                                                <div class="logo logo-light">
                                                    <span class="logo-lg">
                                                        <img src="../logo.PNG" alt="" height="52">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                           
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-3">
                                                <h4 class="m-0 d-print-none">KWITANSI TANDA TERIMA BARANG </h4>
                                            </div>
        
                                        </div><!-- end col -->
                                        <div class="col-md-4 offset-md-2">
                                            <div class="mt-3 float-right">
                                                <p class="m-b-10"><strong> Date : </strong> <span class="float-right" id="dash-daterange"> &nbsp;&nbsp;&nbsp;&nbsp; Timika, {{date('d M Y')}}  </span></p>
                                                <p class="m-b-10"><strong> No :  </strong> <span class="float-right"> <b> TIMCI21010001 </b> </span></p>
                                            </div>
                                        </div><!-- end col -->
                                    </div>
                                   
                                    <div class="row mt-3">
                                        <div class="col-sm-6">
                                            <h6> Pengirim </h6>
                                            <address>
                                               <input type="text" name="" id="" value="REINHARD" readonly>
                                                <!-- 795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                                            </address>
                                        </div> <!-- end col -->
        
                                        <div class="col-sm-6">
                                            <h6> Kasir Gudang </h6>
                                            <address>
                                                <input type="text" name="" id="" value="IMAM" readonly>
                                                <!-- 795 Folsom Ave, Suite 600<br>
                                                San Francisco, CA 94107<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890 -->
                                            </address>
                                        </div> <!-- end col -->
                                    </div> 
                                    <!-- end row -->
<hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
            
                                                    <form>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-small"> NO.BTB </label>
                                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="type.." readonly>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-small"> Telah Terima Dari </label>
                                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="type.." readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-normal">Sejumlah</label>
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="type.." readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large">Terbilang</label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly> 
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large"> Untuk Pembayaran </label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large"> Route </label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large"> Tanda Tangan </label>
                                                            <textarea class="form-control form-control-lg" name="" id="" cols="10" rows="2"></textarea>
                                                        </div>
            
                                                      
                                                    </form>
            
                                                </div> <!-- end card-body -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->
            
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
            
                                                  
            
                                                    <form>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-small"> Tarif </label>
                                                            <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" placeholder="type.."  readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-normal">PPN </label>
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="type.." readonly>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-normal">PNBP </label>
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="type.." readonly>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-normal">ADM </label>
                                                            <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="type.." readonly>
                                                        </div>
            
                                                        <div class="form-group mb-3">
                                                            <label for="example-input-large">Total</label>
                                                            <input type="text" id="example-input-large" name="example-input-large" class="form-control form-control-lg" placeholder="type.." readonly>
                                                        </div>
                                                    
                                                      
                                                    </form>
            
                                                </div> <!-- end card-body -->
                                            </div> <!-- end card -->
                                        </div> <!-- end col -->
                                    </div>
                                   
                                            <div class="clearfix"></div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->
        
                                  
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>


  </div>
  <!-- #/ container -->
</div>


@stop