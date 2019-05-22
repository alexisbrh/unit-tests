@extends('layout.app')

@section('content')
    <div class="card page_tests_content">
        <div class="card-body">
            <form action="{{ route('tests-submit') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="rolls"><strong>Lancés</strong> :</label>
                    <input type="text" class="form-control" id="rolls" name="rolls">
                </div>

                <input type="submit" class="btn btn-primary" value="Lancer">

            </form>
        </div>

    </div>
    <div class="card-results card">
        <h2 class="card-body">
            <h2 class="card-title">Résultats</h2>
            @if(session('results'))
                <ul>
                @foreach(session('results') as $roll => $result)
                    <li>Lancé {{ $roll }} = <strong>{{ $result }}</strong></li>
                @endforeach
                </ul>
            @else
                <p><strong>Aucun résultats</strong></p>
            @endif
        </div>
    </div>
@endsection