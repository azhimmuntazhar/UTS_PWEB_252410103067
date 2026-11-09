@extends('layouts.app')

@section('title', 'Profile')

@section('profile')
    <div class="p-5 gap-5 grid grid-cols-1 md:grid-cols-3 sm:grid-cols-1">
        <div class="bg-white rounded-2xl shadow-md p-6">
            <img src="{{ asset('assets/profile.png') }}" alt="profile" class="w-32 h-32 rounded-full mx-auto mb-4">
            <p class="text-gray-600">Username :</p>
            <h2 class="text-xl font-semibold mb-2">{{$username}}</h2>
            <div class="flex items-center justify-center">
                <button onclick="window.location.href='{{ route('login') }}'" class="bg-red-500 text-white px-4 py-1 w-full rounded-3xl ml-2 hover:bg-red-600 transition-colors duration-300">Logout</button>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-md p-6 col-span-2 flex flex-col justify-between">
            <h2 class="text-xl font-semibold">Mata Kuliah</h2>
            <p class="text-gray-600">Pemprograman Berbasis Website</p>
            <h2 class="text-xl font-semibold">Kelas</h2>
            <p class="text-gray-600">F</p>
            <hr>
            <i class="text-gray-600">*Ditujukan untuk memenuhi tugas UTS Praktikum Mata Kuliah Pemprograman Berbasis Website</i>
            <hr>
            <p class="text-gray-600">- identitas ada di footer</p>
        </div>
    </div>
@endsection
