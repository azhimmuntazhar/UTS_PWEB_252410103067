@extends('layouts.app')

@section('title', 'Dashboard')

@section('dashboard')
@include('components/header')
<div class="p-5 gap-5 grid grid-cols-1 md:grid-cols-4 sm:grid-cols-3">
    <div class="bg-white rounded-2xl shadow-md p-6 hover:scale-105 transition-transform duration-300">
        <h2 class="text-xl font-semibold mb-4">Total Mahasiswa</h2>
        <p class="text-gray-600 text-right text-xl font-bold">{{ $totalMahasiswa}}</p>
    </div>
    <div class="bg-white rounded-2xl shadow-md p-6 hover:scale-105 transition-transform duration-300">
        <h2 class="text-xl font-semibold mb-4">Total Selesai</h2>
        <p class="text-gray-600 text-right text-xl font-bold">{{ $totalSelesai}}</p>
    </div>
    <div class="bg-white rounded-2xl shadow-md p-6 hover:scale-105 transition-transform duration-300">
        <h2 class="text-xl font-semibold mb-4">Total Proses</h2>
        <p class="text-gray-600 text-right text-xl font-bold">{{ $totalProses}}</p>
    </div>
    <div class="bg-white rounded-2xl shadow-md p-6 hover:scale-105 transition-transform duration-300">
        <h2 class="text-xl font-semibold mb-4">Total Belum</h2>
        <p class="text-gray-600 text-right text-xl font-bold">{{ $totalBelum}}</p>
    </div>
    <div class="bg-white rounded-2xl shadow-md p-6 hover:scale-105 transition-transform duration-300">
        <h2 class="text-xl font-semibold mb-4">Rata Rata Progress</h2>
        <p class="text-gray-600 text-right text-xl font-bold">{{ $rataRata}}</p>
    </div>
</div>
@endsection
