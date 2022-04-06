@extends('layout')

@section('content')

    <form method="post" action="{{ route('userInfo.post') }}">

        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <small style="color: red;">{{ $error }}</small>
        @endforeach

        <label>Ime:</label>
        <input type="text" name="name" value="{{ $user->name }}"><br>

        <label >Telefon:</label>
        <input type="text"  name="phone" value="{{ $user->userInfo->phone }}"><br>

        <label>Pol:</label>
        <select name="gender">
            <option value="male"
                    @if($user->userInfo->gender == 'male')
                    selected
                @endif>Muski</option>

            <option value="female"
                    @if($user->userInfo->gender == 'female')
                    selected
                @endif>Zenski</option>
        </select><br>

        <label >Datum rodjenja:</label>
        <input type="date" name="date_of_birth" value="{{ $user->userInfo->date_of_birth }}"><br>

        <label >Tezina:</label>
        <input type="number" name="weight" value="{{ $user->userInfo->weight }}"><br>

        <label >Visina:</label>
        <input type="number" name="height" value="{{ $user->userInfo->height }}"><br>

        <input type="submit" value="Submit">

    </form>

@endsection
