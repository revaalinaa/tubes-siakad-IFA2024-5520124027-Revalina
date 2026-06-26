<h2>Data Dosen</h2>


<a href="/dosen/create">
Tambah Dosen
</a>


<br><br>


<table border="1">

<tr>

<th>No</th>
<th>NIDN</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th>Aksi</th>

</tr>


@foreach($dosen as $d)

<tr>

<td>{{$loop->iteration}}</td>

<td>{{$d->nidn}}</td>

<td>{{$d->nama_dosen}}</td>

<td>{{$d->email}}</td>

<td>{{$d->no_hp}}</td>


<td>


<a href="/dosen/{{$d->id}}/edit">
Edit
</a>



<form action="/dosen/{{$d->id}}" method="POST">

@csrf

@method('DELETE')


<button>
Hapus
</button>


</form>


</td>


</tr>

@endforeach


</table>