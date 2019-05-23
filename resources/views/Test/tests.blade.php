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

                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="verbose" name="verbose">
                        <label for="verbose" class="form-check-label">Verbose</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="sum" name="sum">
                        <label for="sum" class="form-check-label">Sum</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="sp" name="sp">
                        <label for="sp" class="form-check-label">Separated values</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="open" name="open">
                        <label for="open" class="form-check-label">Open</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="advantage" name="advantage">
                        <label for="advantage" class="form-check-label">Advantage</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="disadvantage" name="disadvantage">
                        <label for="disadvantage" class="form-check-label">Disadvantage</label>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Lancer">
                </div>

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
                <p><strong>Aucun résultat</strong></p>
            @endif
        </div>
    </div>
@endsection