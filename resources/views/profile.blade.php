@extends('layout')

@section('content')

    <form method="post" action="{{ route('userInfo.post') }}">

        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <small style="color: red;">{{ $error }}</small>
        @endforeach

        <label >Phone:</label>
        <input type="text"  name="phone"><br>

        <p>Your gender:</p>
        <input type="radio" name="gender" value="male">
        <label for="male">male</label><br>
        <input type="radio" name="gender" value="female">
        <label for="female">female</label><br>

        <label >Date of birth:</label>
        <input type="date" name="date_of_birth"><br>

        <label >Weight:</label>
        <input type="number" name="weight"><br>

        <label >Height:</label>
        <input type="number" name="height"><br>

        <input type="submit" value="Submit">

    </form>

@endsection
