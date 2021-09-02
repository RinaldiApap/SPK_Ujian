@extends('Admin/mainAdmin')

@section('title')
    Admin - Tambah Soal
@endsection

@section('breadcrumbs')
    Admin > Tambah Soal
@endsection

@section('isi')
                <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="card">
                      <div class="card-header">
                        <strong>Form</strong> Pertanyaan
                      </div>
                      <div class="card-body card-block">
                        <form action="{{ url('add_pertanyaan') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            {{-- pertanyaan --}}

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Pertanyaan</label></div>
                            <div class="col-12 col-md-9"><textarea name="pertanyaan" id="pertanyaan" rows="9" placeholder="Pertanyaan..." class="form-control"></textarea></div>
                          </div>

                          {{-- Jawaban --}}
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jawaban - A</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jawabanA" name="jawabanA" placeholder="jawaban A" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jawaban - B</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jawabanB" name="jawabanB" placeholder="jawaban B" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jawaban - C</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jawabanC" name="jawabanC" placeholder="jawaban C" class="form-control"></div>
                          </div>

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jawaban - D</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jawabanD" name="jawabanD" placeholder="jawaban D" class="form-control"></div>
                          </div>

                          

                          {{-- aktif --}}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kunci Jawaban</label></div>
                            <div class="col-12 col-md-9">
                              <select name="kunjaw" id="kunjaw" class="form-control">
                                <option value="a">A</option>
                                <option value="b">B</option>
                                <option value="c">C</option>
                                <option value="d">D</option>
                              </select>
                            </div>
                          </div>

                          {{-- kategori --}}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Soal</label></div>
                            <div class="col-12 col-md-9">
                              <select name="kategori" id="kategori" class="form-control">
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id_kategori }}">{{ $item->kategori }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                          {{-- Aktif --}}
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Aktif Soal</label></div>
                            <div class="col-12 col-md-9">
                              <select name="aktif" id="aktif" class="form-control">
                                <option value="y">Aktif</option>
                                <option value="n">Tidak Aktif</option>
                              </select>
                            </div>
                          </div>
                         
                    
                       
                    
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                        </form>

                    </div>
                    
                  </div>


                </div>


            </div><!-- .animated -->
@endsection

@section('script')
    
@endsection