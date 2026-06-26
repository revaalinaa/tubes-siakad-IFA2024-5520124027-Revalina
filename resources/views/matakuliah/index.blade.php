<h1>Data Mata Kuliah</h1>


<a href="/matakuliah/create">
Tambah MK
</a>


<table border="1">

<tr>

<th>Kode</th>
<th>Nama MK</th>
<th>SKS</th>
<th>Semester</th>
<th>Aksi</th>

</tr>


@foreach($matakuliah as $mk)

<tr>

<td>{{ $mk->kode_mk }}</td>

<td>{{ $mk->nama_mk }}</td>

<td>{{ $mk->sks }}</td>

<td>{{ $mk->semester }}</td>


<td>

<a href="/matakuliah/{{ $mk->id }}/edit">
Edit
</a>


<form action="/matakuliah/{{ $mk->id }}" method="POST">

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