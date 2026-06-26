<h1>Data Mahasiswa</h1>

<a href="/mahasiswa/create">
Tambah Mahasiswa
</a>


<form action="/mahasiswa" method="GET">

    <input 
    type="text" 
    name="search"
    placeholder="Cari nama mahasiswa..."
    value="{{ request('search') }}">

    <button type="submit">
        Cari
    </button>

</form>


<table border="1">

<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Angkatan</th>
<th>Aksi</th>
</tr>


@foreach($mahasiswa as $m)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $m->nim }}</td>

<td>{{ $m->nama_mahasiswa }}</td>

<td>{{ $m->jurusan }}</td>

<td>{{ $m->angkatan }}</td>


<td>

<a href="/mahasiswa/{{ $m->id }}/edit">
Edit
</a>


<form action="/mahasiswa/{{ $m->id }}" method="POST">

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