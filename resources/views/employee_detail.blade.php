@extends('layouts.app')
@section('content')
<div class='container'>
    <h2>Chi tiết giúp việc</h2>
    <div class='row' style="margin-top:20px">
        <div class='col-md-4'>
            <img src={{ URL::asset(str_replace("\\", "/", $employee->avatar)) }} class="img-fluid img-thumbnail" style="height:200px; width:200px" alt="Avatar">
        </div>
        <div class='col-md=8'>
            <p>Mô tả: {{ $employee->description }}</p>
            <a href="{{ route('select', ['id' => $employee->id, 'guest_id' => Auth::user()->id ]) }}">Đặt lịch hẹn</a>
        </div>
    </div>
</div>
@endsection