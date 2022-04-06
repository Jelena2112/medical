@extends('layout')

@section('content')

    @foreach($users as $user)

        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->userType->user_type}}</p>

        <a href="{{ route('userDentalRecord',['user' => $user->id]) }}">Dentalni karton</a>

        <a href="{{ route('userMedicalRecord', ['user' => $user->id]) }}">Medicinski karton</a>

        @if(\Illuminate\Support\Facades\Auth::user()->userType->user_type == "admin")

        <form action="{{ route('changeUserType') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $user->id }}" name="user_id">
            <select name="type">
                @foreach(\App\Models\UserTypeModel::all() as $type)

                    @if($type->user_type == $user->userType->user_type)
                        <option value="{{ $type->id }}" selected >{{ $type->user_type }}</option>
                    @else
                        <option value="{{ $type->id }}" >{{ $type->user_type }}</option>
                    @endif

                @endforeach
            </select>
            <br><br>
            <input type="submit" value="Submit">
        </form>

        @endif

    @endforeach

@endsection
