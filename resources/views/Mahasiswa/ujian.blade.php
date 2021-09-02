@extends('Mahasiswa/mainMahasiswa')

@section('title')
    UJIAN
@endsection

@section('breadcrumbs')
    Dashboard > UJIAN
@endsection

@section('isi')
            <div class="animated fadeIn">
                    <div class="row">
                                     <!-- /# column -->
                                     <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>UJIAN</h4>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{ url('hasil_ujian') }}" method="POST" >
                                                    @csrf
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">BAGIAN 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">BAGIAN 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">BAGIAN 3</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content pl-3 p-1" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                            {{-- ISI --}}
                                                            @foreach ($soal as $item)
                                                            <div class="row form-group">
                                                                <div class="col col-md-11">
                                                                    <label class=" form-control-label">{{ $loop->iteration }}. {{ $item->soal }}</label>
                                                                  <div class="form-check">
                                                                    <div class="radio">
                                                                      <label for="radio1" class="form-check-label ">
                                                                        <input type="radio" id="radio1" name="{{ $loop->iteration }}" value="a" class="form-check-input">{{ $item->a }}
                                                                      </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                      <label for="radio2" class="form-check-label ">
                                                                        <input type="radio" id="radio2" name="{{ $loop->iteration }}" value="b" class="form-check-input">{{ $item->b }}
                                                                      </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label for="radio3" class="form-check-label ">
                                                                          <input type="radio" id="radio3" name="{{ $loop->iteration }}" value="c" class="form-check-input">{{ $item->c }}
                                                                        </label>
                                                                      </div>
                                                                      <div class="radio">
                                                                        <label for="radio4" class="form-check-label ">
                                                                          <input type="radio" id="radio4" name="{{ $loop->iteration }}" value="d" class="form-check-input">{{ $item->d }}
                                                                        </label>
                                                                      </div>
                                                                  </div>
                                                                </div>
                                                              </div>        
                                                                <input type="text" name="knc{{ $loop->iteration }}" id="" value="{{ $item->knc_jawaban }}" hidden>  
                                                              
                                                                <br><br>
                                                                {{-- {{$no++;}} --}}
                                                                @endforeach
                                                            {{-- ISI END --}}
                                                        </div>
                                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                            <h3>BAGIAN 2</h3>
                                                            <p>Some content here.</p>
                                                        </div>
                                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                            <h3>BAGIAN 3</h3>
                                                            <p>Some content here.</p>
                                                        </div>
                                                    </div>
            
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /# column -->
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info right">SELESAI</button>
                                </div>

   
                    </div>



            </div><!-- .animated -->
@endsection

@section('script')

@endsection