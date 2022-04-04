@extends('layout')

@section('content')

    <p>Ime: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Phone: {{ $user->userInfo->phone ?? "Nije upisan broj telefona"}}</p>
    <p>Gender: {{ $user->userInfo->gender ?? "Nije upisan pol"}}</p>
    <p>Date of birth: {{ $user->userInfo->date_of_birth ?? "Nije upisan datum rodjenja"}} </p>
    <p>Weight: {{ $user->userInfo->weight ?? "Nije upisana tezina" }}</p>
    <p>Height: {{ $user->userInfo->height ?? "Nije upisana visina"}} </p>
    <p>Current Teeth: {{ $user->userDentalRecord->current_teeth ?? "Nisu upisani zubi"}}</p>
    <p>Missing Teeth: {{ $user->userDentalRecord->missing_teeth ?? "Nisu upisani zubi koji nedostaju"}}</p>
    <p>Notes: {{ $user->userDentalRecord->notes ?? "Nema zapisa beleske"}}</p>

    @if( $user->UserMedicalRecord != null )
        <p>Medicinski karton: {{ $user->UserMedicalRecord->notes }}</p>
        <p>Doktor: {{ $user->UserMedicalRecord->doctor->name }}</p>
    @endif

@endsection
