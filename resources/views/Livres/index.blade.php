@extends('layouts.master')

@section('title', 'Livres')

@section('content')


<div class="container">
    <a class="btn btn-info text-white p-2 m-2 " href="{{ route('Livres.create') }}">Ajouter</a>
    <table class="table  table-hover  table-striped">
        <thead class='table-dark'>
            <tr >
                <th>id</th>
                <th>Title</th>
                <th>Price</th>
                <th>Rate</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>

            @foreach($Livres as $Livre)
                
            <tr>
                <td>{{ $Livre->id }}</td>
                <td>{{ $Livre->title }}</td>
                <td>{{ $Livre->price }} DH</td>
                <td>{{ $Livre->rate }}</td>
                
                <td>
                    <a class="btn btn-info btn-sm " href="{{ route('Livres.show', $Livre->id ) }}"><i class="bi bi-eye"></i></a>
                    <a class="btn bi-pencil-square text-warning"></a>
                    <button type="submit"  class="btn btn-link text-danger p-0" >
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>


@endsection