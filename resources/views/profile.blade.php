@extends('layout')

@section('content')

    <form method="post" action="{{ route('userInfo.post') }}">

        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <small style="color: red;">{{ $error }}</small>
        @endforeach

        <label>Ime:</label>
        <input type="text" name="name" value="{{ $user->name }}"><br>

        <label >Phone:</label>
        <input type="text"  name="phone" value="{{ $user->userInfo->phone }}"><br>

        <label>Your gender:</label>
        <select name="gender">
            <option value="male"
                    @if($user->userInfo->gender == 'male')
                    selected
                @endif>Male</option>

            <option value="female"
                    @if($user->userInfo->gender == 'female')
                    selected
                @endif>Female</option>
        </select>

        <label >Date of birth:</label>
        <input type="date" name="date_of_birth" value="{{ $user->userInfo->date_of_birth }}"><br>

        <label >Weight:</label>
        <input type="number" name="weight" value="{{ $user->userInfo->weight }}"><br>

        <label >Height:</label>
        <input type="number" name="height" value="{{ $user->userInfo->height }}"><br>

        <input type="submit" value="Submit">

    </form>

@endsection
