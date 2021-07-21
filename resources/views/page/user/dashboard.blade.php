@include('layouts.users.app')
@section('content')
    Hai {{Auth::user()->username}}
@endsection