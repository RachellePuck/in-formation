@extends('layouts.app')

@section('content')
<div>
    <p class="p-6 mx-auto text-4xl text-center">Jouw ruilverzoek voor het overnemen van:</p>
    <div class="p-6 max-w-sm mx-auto my-8 bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div>
            <div class="text-xl font-medium text-black">Afdeling: {{ $tradeRequest->shift->department }}</div>
            <p class="text-gray-500">Datum: {{ date('D d-m-Y', strtotime($tradeRequest->shift->start_time)) }}</p>
            <div class="text-gray-500">Tijd: {{ date('H:i', strtotime($tradeRequest->shift->start_time)) . ' - ' . date('H:i', strtotime($tradeRequest->shift->end_time)) }}</div>
        </div>
    </div>
    <p class="p-6 mx-auto text-4xl text-center">door:</p>
    <div class="p-6 max-w-sm mx-auto my-8 bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div>
            <div class="text-xl font-medium text-black">{{ $tradeRequest->employee->name }}</div>
        </div>
    </div>
    <p class="p-6 mx-auto text-4xl text-center">is verzonden!</p>
    <a href="{{ route('schedule') }}"><button class="bg-blue-600 py-2 px-8 my-4 rounded-lg text-white flex mx-auto">Terug naar je rooster</button></a>
</div>
@endsection