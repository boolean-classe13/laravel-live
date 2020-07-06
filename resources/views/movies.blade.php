@extends('layouts.app')

@section('page-title', 'Movies index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Titolo originale</th>
                            <th scope="col">Nazionalità</th>
                            <th scope="col">Data</th>
                            <th scope="col">Voto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista_film as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->original_title }}</td>
                                <td>{{ $movie->nationality }}</td>
                                <td>{{ $movie->date }}</td>
                                <td>{{ $movie->vote }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
