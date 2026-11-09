@props(['dataProgress'])

<div class="bg-white rounded-2xl shadow-md p-6 hover:scale-105 transition-transform duration-300">
    <h2 class="text-xl font-semibold mb-4">{{ $dataProgress['nama'] }}</h2>
    <p class="text-gray-600">Status: {{ $dataProgress['status'] }}</p>
    <div class="w-full bg-gray-200 rounded-full h-4 mt-2">
        @if ($dataProgress['progress'] >= 80)
            <div class="bg-green-500 h-4 rounded-full" style="width: {{ $dataProgress['progress'] }}%"></div>
        @elseif ($dataProgress['progress'] >= 50)
            <div class="bg-yellow-500 h-4 rounded-full" style="width: {{ $dataProgress['progress'] }}%"></div>
        @else
            <div class="bg-red-500 h-4 rounded-full" style="width: {{ $dataProgress['progress'] }}%"></div>
        @endif
    </div>
    <p class="text-gray-600 mt-2">Progress: {{ $dataProgress['progress'] }}%</p>
</div>
