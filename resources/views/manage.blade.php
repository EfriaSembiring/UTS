@extends('layout.Master')
@section('title', 'Manage')

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3> Daftar Artikel </h3>
        </div>
        
        </br>
        </br>  
       <table class="table table-bordered table-striped">
         <thead>
             <tr>
             <th>No</th>
             <th>Judul</th>
             <th>Tanggal</th>
             </tr>
             </thead>
             <tbody>
              @foreach ($article as $a)
             <tr>
             <td>{{$a->id}}</td>
             <td>{{$a->title}}</td>
             <td>{{$a->created_at}}</td>
             <td>
                <a href="article/edit/{{$a->id}}" class="badge badge-warning">Edit</a>
                <a href="article/delete/{{$a->id}}" class="badge badge-danger">Hapus</a>
             </tr>

             @endforeach
             </tbody>
            </table>
        </div>
        <br>
        <a href="manage/add" class="btn btn-primary">Tambah Data</a>
        <br>
    </div>
</div>    
@endsection