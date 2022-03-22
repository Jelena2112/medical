@extends('layout')

@section('content')

    <form method="post" action="{{ route('userInfo.post') }}">

        {{csrf_field()}}

        @foreach($errors->all() as $error)
            <small style="color: red;">{{ $error }}</small>
        @endforeach


        <label >Phone:</label>
        <input type="text"  name="phone" value="{{ $userInfo->phone }}"><br>

        <p>Your gender:</p>
        <select name="gender">
            <option value="male"
                    @if($userInfo->gender == 'male')
                    selected
                @endif>Male</option>

            <option value="female"
                    @if($userInfo->gender == 'female')
                    selected
                @endif>Female</option>
        </select>

        <label >Date of birth:</label>
        <input type="date" name="date_of_birth" value="{{ $userInfo->date_of_birth }}"><br>

        <label >Weight:</label>
        <input type="number" name="weight" value="{{ $userInfo->weight }}"><br>

        <label >Height:</label>
        <input type="number" name="height" value="{{ $userInfo->height }}"><br>

        <input type="submit" value="Submit">

    </form>

@endsection
