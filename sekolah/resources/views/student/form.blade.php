@extends('layout.app')
@section('content')
  <div class="col-md-6">
  <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header">
                    <div class="card-title">Tambahkan siswa</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="row mb-3">
                        <div class="col-md-6">
                        <label for="exampleInputnama" class="form-label">nama</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          aria-describedby="namaHelp"
                          name="name"
                          
                        />
                        @error('name')
                        <div class="invalid-feedback text-danger">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" />
                        @error('umur')
                        <div class="invalid-feedback text-danger">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      </div>


                      <div class="row mb-3">

                        <div class="row mb-3">
                          <label for="no_telp" class="form-label">no.telp</label>
                          <input type="number" class="form-control" id="no_telp" name="no_telp"/>
                          @error('no_telp')
                        <div class="invalid-feedback text-danger">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="kelas" class="form-label">kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" />
                        @error('kelas')
                        <div class="invalid-feedback text-danger">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      
                        </div>
                      </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
              </div>
</div>
@endsection