@extends('layouts.recrut')

@section('recrut')
<div class="column is-half">
    <div class="column">
        <a class="button is-primary" href="{{ route('department.index') }}">Skocz do działów</a>
    </div>
    <div class="column">
        <h1>Aplikanci</h1>
    </div>
    <div class="column">
        <table class="table is-bordered">
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Telefon</th>
                <th>E-mail</th>
                <th>Dział</th>
                <th>Wybierz CV</th>
                <th>Wybierz Dokument</th>
                <th>Informacja</th>
                <th>Akcja</th>
            </tr>
                @foreach($recruits as $recruit)
                <tr>
                <td>{{ $recruit->firstName }}</td>
                <td>{{ $recruit->lastName }}</td>
                <td>{{ $recruit->telephone }}</td>
                <td>{{ $recruit->email }}</td>
                <td>{{ $recruit->department->name }}</td>
                <td>{{ $recruit->pathCV }}</td>
                <td>{{ $recruit->pathDoc }}</td>
                <td>{{ $recruit->info }}</td>
                <td><a class="button is-danger" href="{{ route('recruitment.delete', $recruit->id) }}">Usuń</a></td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
