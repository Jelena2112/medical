@extends('layout')

@section('content')

   <p>Dobrodosli na nas portal, mozete da pogledate Vas karton</p>
   <a href="{{route('userAllInfo.get')}}">Moj karton</a>

@endsection


