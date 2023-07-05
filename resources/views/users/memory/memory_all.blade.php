@extends('layouts.app')
@section('title', __('user.upcoming_birthday'))
@section('content')
    @foreach ($memories as $key => $memory)
        <div class="card" style="margin: 2px; width:96%">
            <h6 class="card-header"><a class="btn btn-info"
                    style="  background-color: #25b3b8;
                border: none;
                color: white;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius:100px;
                font-size: 16px;"
                    href="{{ route('users.show', $memory->user_id) }}">{{ $memory['user']['name'] }}</a>
            </h6>
            <h5 class="card-header">{{ $memory->memory_title }}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">{{ $memory->memory_description }}
                </p>
                {{-- @if (Auth::user()->id == $memory->user_id)
                    <a href="{{ route('delete.memory', $memory->id) }}" class="btn btn-primary">امسح</a>
                    <a href="{{ route('edit.memory', $memory->id) }}" class="btn btn-primary">تعديل</a>
                @else
                @endif --}}
                @if (Auth::user()->role == 'admin')
                    <a href="{{ route('delete.memory', $memory->id) }}" class="btn btn-primary">امسح</a>
                    <a href="{{ route('edit.memory', $memory->id) }}" class="btn btn-primary">تعديل</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection
