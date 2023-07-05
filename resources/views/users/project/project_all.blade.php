{{-- @extends('layouts.app')
@section('title', __('user.upcoming_birthday'))
@section('content')
    @foreach ($projects as $project)
        <style>
            .row {
                margin-right: 0px;
                margin-left: 9%;
            }

            .card-body {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                min-height: 1px;
                padding: 3px;
            }

            .card {
                width: 18rem;
                margin: 5px;
            }
        </style>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('company_image' . '/' . $project->company_image) }}" alt="Card image cap">
            <div class="card-body">
                <h6 class="card-title">المالك: <a href="{{ route('users.show', $project->user_id) }}">
                        {{ $project['user']['name'] }}</a></h6>
                <h5 class="card-title">{{ $project->company_name }}</h5>
                <p class="card-text">{{ $project->company_address }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">الهاتف: {{ $project->company_phone }} </li>

            </ul>
            <div class="card-body">
                @if ($project->company_facebook == null)
                @else
                    <a href="{{ $project->company_facebook }}" class="card-link btn btn-info">فبسبوك</a>
                @endif
                @if ($project->company_twitter == null)
                @else
                    <a href="{{ $project->company_twitter }}" class="card-link btn btn-info">تويتر</a>
                @endif
                @if ($project->company_instagram == null)
                @else
                    <a href="{{ $project->company_instagram }}" class="card-link btn btn-info">انستقرام</a>
                @endif

            </div>
            @if ($project->company_links == null)
            @else
                <div class="card-body">
                    <a href="{{ $project->company_links }}" class="card-link btn btn-success">لنكات اخري</a>
                </div>
            @endif
        </div>
    @endforeach
@endsection --}}
