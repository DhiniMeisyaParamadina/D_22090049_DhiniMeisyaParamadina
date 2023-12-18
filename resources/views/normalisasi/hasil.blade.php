@extends('layouts.app')

@section('contents')
    <div class="container">

        <h1>Ranking Alternatif</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Ranking</th>
                    <th>Alternatif</th>
                    <th>Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rank as $alternatifId => $ranking)
                    <tr>
                        <td>{{ $ranking }}</td>
                        <td>Alternatif {{ $alternatifId }}</td>
                        <td>{{ $val[$alternatifId] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
