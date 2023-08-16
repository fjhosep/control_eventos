@extends('layouts.main', ['activePage' => 'Inscrpción', 'titlePage' => 'Proceso de Inscripción'])
@section('content')


<livewire:wizard competition_id={{$competition}} />

@endsection