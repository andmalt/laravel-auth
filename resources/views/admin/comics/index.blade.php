@extends('layouts.app')

@section('content')

<div class="container pt-5 p-md-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-11 col-lg-10">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"> Titolo </th>
                        <th scope="col">Autore</th>
                        <th scope="col">Data di pubblicazione</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                    <tr>
                        <td scope="row"></td>
                        <td><a href="{{ route('admin.comics.show', $comic->id )}}" class="link_name">{{strtoupper($comic->title)}}</a></td>
                        <td>{{$comic->author}}</td>
                        <td>{{date("d-m-Y",strtotime($comic->publication_date))}}</td>
                    </tr> 
                    @endforeach             
                </tbody> 
            </table>
        </div>
    </div>
</div>

@endsection