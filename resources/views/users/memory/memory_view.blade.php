@extends('layouts.app')
@section('title', __('user.upcoming_birthday'))
@section('content')
    @foreach ($memories as $key => $memory)
        <div style="margin: 2px; width:96%" class="card">
            <h5 class="card-header">{{ $memory->memory_title }}</h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">{{ $memory->memory_description }}
                </p>
                @if (Auth::user()->id == $memory->user_id)
                    <a href="{{ route('edit.memory', $memory->id) }}" class="btn btn-primary">تعديل</a>
                    <a href="{{ route('delete.memory', $memory->id) }}" class="btn btn-primary">امسح</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection
