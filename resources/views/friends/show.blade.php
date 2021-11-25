@extends('layouts.app')

@section('title', 'cobacobacoba')

@section('content')
<div class="card border-success mb-3" style="max-width: 20rem;">
<div class="card-body text-secondary">

    <h5>Nama : {{ $friend['nama'] }}</h5>
    <h5>No. Telp : {{ $friend['no_telp'] }}</h5>
    <h5>Alamat : {{ $friend['alamat'] }}</h5>
    <h5>Pendidikan : {{ $friend['pendidikan'] }}</h5>


</div>
</div>

<div class="card border-success mb-3" style="max-width: 20rem;">
<div class="card-body text-secondary">

    <h5>Member Group : @if($friend->groups_id != 0) {{ $friend->groups->name }} @else Belum Mempunyai Groups @endif</h5>
    <h5>History : </h5>
    <ul>
    @if($friend->groups_id != 0)
    @foreach ($friend->history as $history)
    <li> {{$history->groups->name}} </li>
    @endforeach
    @else 
    <li>Belum Ada History Groups</li>
    @endif
    <ul>
</div>
</div>
@endsection