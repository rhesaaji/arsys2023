@section('content')
    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Research Titles:</h6>
                        <ul>
                            @foreach ($user->arsysResearch as $research)
                                <li>{{ $research->title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection