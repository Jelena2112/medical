@extends('layout')

@section('content')

    <p>Ime: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Telefon: {{ $user->userInfo->phone ?? "Nije upisan broj telefona"}}</p>
    <p>Pol: {{ $user->userInfo->gender ?? "Nije upisan pol"}}</p>
    <p>Datum rodjenja: {{ $user->userInfo->date_of_birth ?? "Nije upisan datum rodjenja"}} </p>
    <p>Tezina: {{ $user->userInfo->weight ?? "Nije upisana tezina" }}</p>
    <p>Visina: {{ $user->userInfo->height ?? "Nije upisana visina"}} </p>
    <p>Trenutni zubi: {{ $user->userDentalRecord->current_teeth ?? "Nisu upisani zubi"}}</p>
    <p>Zubi koji nedostaju: {{ $user->userDentalRecord->missing_teeth ?? "Nisu upisani zubi koji nedostaju"}}</p>
    <p>Beleske: {{ $user->userDentalRecord->notes ?? "Nema zapisa beleske"}}</p>

    @if( $user->UserMedicalRecord != null )
        <p>Medicinski karton: {{ $user->UserMedicalRecord->notes }}</p>
        <p>Doktor: {{ $user->UserMedicalRecord->doctor->name }}</p>
    @endif

@endsection
