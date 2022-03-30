@extends('layout')

@section('content')
 <p>zubi: {{$user->userDentalRecord->current_teeth}}</p>
 <p>zubi koji fale: {{$user->userDentalRecord->missing_teeth}}</p>
 <p>Beleske: {{$user->userDentalRecord->notes}}</p>
@endsection
