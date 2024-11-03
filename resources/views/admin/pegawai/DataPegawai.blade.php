@extends('layout.main')
@section('content')

<h3 class="text-center">Data Pegawai</h3>
<div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
        <th scope="col">Tempat lahir</th>
        <th scope="col">Tanggal lahir</th>
        <th scope="col-mb-3">Alamat</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Divisi</th>
        <th scope="col">Tanggal Bergabung</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($data_pegawai as $item )

      <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nip}}</td>
            <td>{{ $item->tempat_lahir}}</td>
            <td>{{ $item->tanggal_lahir}}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->jabatan->posisi}}</td>
            <td>{{ $item->jabatan->divisi}}</td>
            <td>{{ $item->tanggal_bergabung}}</td>
            <td>
              <div class="d-flex gap-2">
                <td>
                  <a href="{{url('/editdata/'. $item->id)}}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                  <form action="{{url('/deletedata')}}" method="POST" >
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </div>
            </td>
  
      </tr>
      @endforeach
        
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    <a href="#" class="btn btn-dark">Back to Page</a>
  </div>
</div>
@endsection