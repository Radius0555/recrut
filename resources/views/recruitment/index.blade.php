@extends('layouts.layout')

@section('content')
<div class="column is-half">
    <div class="column">
        <h1>FORMULARZ REKRUTACYJNY</h1>
    </div>
    <form method="post" action="{{ route('recruitment.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="column">
            <section class="section">
                <h2>DANE OSOBOWE</h2>
            </section>
            <section class="section">
                <input class="input" name="firstName" type="text" placeholder="Imię">
            </section>
            <section class="section">
                <input class="input" name="lastName" type="text" placeholder="Nazwisko">
            </section>
        </div>
        <div class="column">
            <section class="section">
                <h2>DANE KONTAKTOWE</h2>
            </section>
            <section class="section">
                <input class="input" name="telephone" type="text" placeholder="Numer telefonu">
            </section>
            <section class="section">
                <input class="input" name="email" type="email" placeholder="E-mail">
            </section>
        </div>
        <div class="column">
            <section class="section">
                <h2>Wybierz dział:</h2>
            </section>
            <section class="section">
                <div class="select">
                    <select name="department_id">
                        @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                        @endforeach
                    </select>
                </div>
            </section>
        </div>
        <div class="column">
            <section class="section">
                <h2>Informacje dodatkowe:</h2>
            </section>
            <section class="section">
                <div class="field">
                    <div class="file is-medium is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="pathCV">
                            <span class="file-label">
                                <h3>Dodaj swoje CV</h3>
                            </span>
                        </label>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="field">
                    <div class="file is-medium is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="pathDoc">
                            <span class="file-label">
                                <h3>Dodaj inne dokumenty aplikacyjne</h3>
                            </span>
                        </label>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="field">
                    <div class="file is-medium is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="text" name="info">
                            <span class="file-label">
                                <textarea class="textarea" placeholder="Informacje dodatkowe"></textarea>
                            </span>
                        </label>
                    </div>
                </div>
            </section>
        </div>
        <div class="control">
            <button class="button is-danger" type="submit">Aplikuj</button>
        </div>
        @if($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    </form>
</div>
@endsection
