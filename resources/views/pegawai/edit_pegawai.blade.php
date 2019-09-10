@extends('layouts.app')

@section('stir')
 <link href="{{ asset('/build/css/custom.min.css') }}" rel="stylesheet">
@endsection


@section('htmlheader_title')
  Home
@endsection
@section('main-content')
<div class="container spark-screen">
  <div class="row">
      <div class="col-md-11">
          <div class="panel panel-default">
              <div class="panel-heading"><h4 class="title">EDIT PEGAWAI</h4></div>
              <div class="panel-body">
  
	    <div class="content">
	        <form action="{{ url('update', $peg->id_pegawai)}}" method="POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
	        
<!-- page content -->
        <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">

                    <h2>Example: Vertical Style</h2>
                    <!-- Tabs -->
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-11">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        
                      </ul>

                      <div id="step-11">
                        <h2 class="StepTitle">Inputkan Data Pegawai</h2>
                        <form class="form-horizontal form-label-left">
                        <br>

                          <span class="section"></span>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">NIP <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" name="nip" required="required" value="{{$peg -> nip}}" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Nama Pegawai<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" name="nama" required="required" value="{{$peg -> nama}}" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Keterangan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                            <input type="radio" value="Aktif" name="keterangan">Aktif<br>
                            <input type="radio" value="Tidak Aktif" name="keterangan">Tidak Aktif<br> 
                          </div>
                        </div>
                        <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Jabatan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                              <input type="text" name="jabatan" required="required" value="{{$peg -> jabatan}}" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <br><br>

                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Status Kepegawaian <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">                            
                        <select class="form-control border-input" name="id_status">
                            <option value="1">GTY</option>
                            <option value="2">GTT</option>
                            <option value="3">PTY</option>
                            <option value="4">PTT</option>
                            
                        </select>
                        </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Gaji Pokok <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_gapok">
                                @foreach($data as $pok)
                                <option value="{{$pok->id_gapok}}">{{$pok->gapok}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>

                        </form>
                      </div>
                      <div id="step-22">


                        <h2 class="StepTitle">Masukkan Tunjangan GTY-GTT (Jika Mempunyai Status GTY-GTT)</h2>
                        <br>

                          <span class="section"></span>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Choose All<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <?php $no = 1; ?>
                              @foreach($cs as $x)
                              <input type="checkbox" value="{{$x->nominal}}" name="<?php echo $no++;?>">{{$x->tunjangan}}<br>
                              @endforeach
                            </div>
                          </div>
                          <br>
                          <br>
                          <br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Tunjangan Keluarga <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_keluarga">
                                @foreach($aa as $kel)
                                <option value="{{$kel->id_keluarga}}">{{$kel->jenis_keluarga}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Tunjangan Fungsional <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_fungsional">
                                @foreach($ff as $fung)
                                <option value="{{$fung->id_fungsional}}">{{$fung->jenis_fungsional}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Tunjangan Jabatan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_jabatan">
                                @foreach($jj as $jab)
                                <option value="{{$jab->id_jabatan}}">{{$jab->jenis_jabatan}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Potongan Kesehatan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_kesehatan">
                                @foreach($ss as $sehat)
                                <option value="{{$sehat->id_kesehatan}}">{{$sehat->jenis_kesehatan}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Potongan Pensiun<span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_pensiun">
                                @foreach($pp as $pen)
                                <option value="{{$pen->id_pensiun}}">{{$pen->jenis_pensiun}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>

                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Tunjangan GTT <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_gtt">
                                @foreach($tt as $gtt)
                                <option value="{{$gtt->id_gtt}}">{{$gtt->jenis_gtt}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>
             
                          
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Potongan <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6">
                             
                              <select class="form-control border-input" name="id_potongan">
                                @foreach($pot as $pot)
                                <option value="{{$pot->id_potongan}}">{{$pot->potongan}}</option>
                                @endforeach
                              </select>

                            </div>
                          </div>
                          <br><br>



                      </div>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
              </form>
            </div>
          </div>
        </div>
        </div>
    </div>
@section('script')
    <!-- jQuery -->
    <script src="{{ asset('/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('/vendors/nprogress/nprogress.js') }}"></script>
    <!-- jQuery Smart Wizard -->
    <script src="{{ asset('/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('/build/js/custom.min.js') }}"></script>

    <!-- jQuery Smart Wizard -->
    <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script>
@endsection
@endsection