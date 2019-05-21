@extends('layout.app')

@section('content')
    <div class="page_tests_content">
        <form action="{{ route('tests-submit') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="rolls"><strong>Lancés</strong> :</label>
                <input type="text" class="form-control" id="rolls" name="rolls">
            </div>

            <input type="submit" class="btn btn-primary" value="Lancer">

        </form>
        <div class="results">
            @if(session('results'))
                <ul>
                @foreach(session('results') as $roll => $result)
                    <li>Lancé {{ $roll }} = <strong>{{ $result }}</strong></li>
                @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection