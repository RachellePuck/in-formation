@extends('layouts.app')

@section('content')
    <h1 class="p-6 mx-auto text-4xl text-center">Vraag iemand om jouw dienst over te nemen</h1>
    <div class="p-6 max-w-sm mx-auto my-8 bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div>
            <div class="text-xl font-medium text-black">Afdeling: {{ $shift->department }}</div>
            <p class="text-gray-500">Datum: {{ date('D d-m-Y', strtotime($shift->start_time)) }}</p>
            <div class="text-gray-500">Tijd: {{ date('H:i', strtotime($shift->start_time)) . ' - ' . date('H:i', strtotime($shift->end_time)) }}</div>
        </div>
    </div>
    <hr>
    <div class="grid gap-4 grid-cols-2 mx-auto">
        @foreach ($employees as $employee)
        <div>
            <div class="p-6 max-w-sm mx-auto my-8 bg-white rounded-xl shadow-md flex items-center space-x-4">
                {{ $employee->first_name . " " . $employee->last_name }}
            </div>        
        </div>
        @endforeach
    </div>
@endsection