@php
    $titrePage = 'Services'
@endphp

@extends('layouts.principal')

@section('contenu')
   
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nom complet</th>
        <th scope="col">Age</th>
        <th scope="col">Ville</th>
        <th scope="col">Pays</th>
        <th scope="col">Poste</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($tousEmployes as $employe)
        <tr>
            <td> {{ $employe->id }}</td>
            <th> {{ $employe->nom_complet }} </th>
            <td> {{ $employe->age }}</td>
            <td> {{ $employe->ville }} </td>
            <td> {{ $employe->pays }}</td>
            <td> {{ $employe->poste_occupe }}</td>
        </tr>
       @endforeach
    </tbody>
  </table>
{{ $tousEmployes->links() }}

@stop