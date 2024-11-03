@extends('layout.main')
@section('content')
 

        <h3 class="text-center">Input Data Pegawai</h3>
        <div class="text-center w-50 mx-auto fw-light bold-text"></div>
            <form action="inputdata" method="post">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" >
              </div>  
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tempat lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" >
              </div>
              <div class="form-floating mb-3">
                <label for="floatingTextarea2">Alamat</label>
                <textarea class="form-control" name="alamat" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                    <option selected></option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
              </div>
              <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
              <select name="jabatan_id" class="form-select" aria-label="Default select example">
                <option selected></option>
                @foreach ($jabatan as $item)
                <option value="{{$item->id}}">{{$item->posisi}}</option>    
                @endforeach
              </select>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Bergabung</label>
                <input type="date" name="tanggal_bergabung" min="37" max="43" class="form-control" id="exampleFormControlInput1" >
              </div>
              
              <div>
                <button href type="submit" class="btn btn-info">Tambah Data</button>
              </div>
           </form>
@endsection