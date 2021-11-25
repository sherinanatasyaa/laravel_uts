@extends('layouts.app')

@section('title', 'cobacobacoba')

@section('content')
<div class="card border-success" style="max-width: 20rem;">
    <div class="card-body text-secondary">

        <div class="card-body">
            <li class="list-group-item">{{ $group['description'] }}</li>
                <li class="list-group-item">Jumlah Anggota : {{ $group->friends->count() }}</li>
                <li class="list-group-item">Jumlah Anggota Masuk : {{ $group->history->count() }}</li>
                <li class="list-group-item">Jumlah Anggota Keluar : {{ $group->history->where('status', 'inactive')->count() }}
                </li>
        </div>
    </div>

</div>
@endsection