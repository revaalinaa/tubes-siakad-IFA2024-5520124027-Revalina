<x-app-layout>

<div class="p-6">

<h1 class="text-2xl font-bold">
Dashboard Admin
</h1>

<div class="grid grid-cols-5 gap-4 mt-5">

<div class="bg-white p-5 shadow rounded">
<h3>Mahasiswa</h3>
<p>{{ $jumlahMahasiswa }}</p>
</div>

<div class="bg-white p-5 shadow rounded">
<h3>Dosen</h3>
<p>{{ $jumlahDosen }}</p>
</div>

<div class="bg-white p-5 shadow rounded">
<h3>Mata Kuliah</h3>
<p>{{ $jumlahMatakuliah }}</p>
</div>

<div class="bg-white p-5 shadow rounded">
<h3>Jadwal</h3>
<p>{{ $jumlahJadwal }}</p>
</div>

<div class="bg-white p-5 shadow rounded">
<h3>KRS</h3>
<p>{{ $jumlahKrs }}</p>
</div>

</div>

</div>

</x-app-layout>