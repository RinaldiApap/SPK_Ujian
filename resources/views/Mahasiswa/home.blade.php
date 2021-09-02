@extends('Mahasiswa/mainMahasiswa')

@section('title')
    Home Mahasiswa
@endsection

@section('breadcrumbs')
    Dashboard > Mahasiswa
@endsection

@section('isi')
     <div class="animated fadeIn">

                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText">UJIAN</strong>
                                </div>

                                <div class="card-body">

                              <div class="typo-headers">
                                <h2 class="pb-2 display-5 text-center">ATURAN</h2>
                            </div>
                            <div class="typo-articles">
                                <h6 style="text-align: justify;">
                                    @foreach ($aturan as $item)
                                        {{ $item->peraturan }}
                                    @endforeach
                                </h6>
                              </div>
                              <br/><br/>
   

                                         <div class="col-md-12">
        <div class="form-group">
            <input type="checkbox" name="aturan" id="aturan" required> Saya setuju dengan aturan diatas!
        </div>
        <div class="text-right">
          <a href="{{ url('mahasiswa_ujian') }}">  <button id="btn" class="btn btn-info" disabled> Mulai Ujian </button> </a>
        </div>
    </div>

                    </div>

                    
                </div>


</div>
</div>
   
</div>
</div>



            </div><!-- .animated -->
@endsection

@section('script')
            <script>
            $('#aturan').click(function () {
        //check if checkbox is checked
        if ($(this).is(':checked')) {

            $('#btn').removeAttr('disabled'); //enable input

        } else {
            $('#btn').attr('disabled', true); //disable input
        }
    });
            </script>
@endsection