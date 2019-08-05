@extends('layouts.layout')

@section('content')
<div class="column is-half">
    <div class="column">
        <a class="button is-primary" href="{{ route('recrut.index') }}">Skocz do aplikantów</a>
    </div>
    <div class="column">
        <h1>Lista działów</h1>
    </div>
    <div class="column">
        <a class="button is-success" href="{{ route('department.create') }}">Dodaj dział</a>
    </div>
    <div class="column">
        <table class="table is-bordered">
            <tr>
                <th>Nazwa działu</th>
                <th>Akcja do działu</th>
            </tr>
                @foreach($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td><a class="button is-info" href="{{ route('department.edit', $department->id) }}">Edytuj</a>
                        <a class="button is-danger" href="{{ route('department.delete', $department->id) }}">Usuń</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
</div>
@endsection
