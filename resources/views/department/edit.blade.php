@extends('layouts.recrut')

@section('recrut')
    <div class="column is-half">
        <div class="column">
            <h1>Edytuj dział</h1>
        </div>
        <div class="column">
            <form method="post" action="{{ route('department.update', $department->id) }}">
                @method('PATCH')
                @csrf
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" name="name" type="text" value="{{ $department->name }}">
                        </p>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Edytuj</button>
                    </div>
                    <div class="control">
                        <a class="button is-link" href="{{ route('department.index') }}">Anuluj</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
