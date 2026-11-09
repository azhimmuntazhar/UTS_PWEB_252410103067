@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('pengelolaan')
    <div class="p-5 gap-5 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3">
        <div class="col-span-3 bg-white rounded-2xl shadow-md p-6 space-y-2">
            <h2 class="text-2xl font-semibold">Pantau progress UTS Pemprograman Berbasis Website</h2>
            <p class="text-gray-600">Kalo ada yang ga ngerjain marahin aja mas</p>
        </div>
        @foreach ($progressUTS as $dataProgress)
            <x-card :dataProgress="$dataProgress"/>
        @endforeach
    </div>
@endsection
