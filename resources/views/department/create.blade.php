@extends('layouts.recrut')

@section('recrut')
    <div class="column is-half">
        <div class="column">
            <h1>Utwórz dział</h1>
        </div>
        <div class="column">
            <form method="post" action="{{ route('department.store') }}">
                @csrf
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input" type="text" name="name" placeholder="Podaj nazwę działu">
                        </p>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Utwórz</button>
                    </div>
                    <div class="control">
                        <a class="button is-link" href="{{ route('department.index') }}">Anuluj</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
