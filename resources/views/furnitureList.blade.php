@extends('layouts.appmain')

@section('content')


<table>
	<tr>
		<th>ID</th>
		<th>Pavadinimas</th>
		<th>Pardavejas</th>
		<th>Mat vnt</th>
		<th>Kiekis</th>
		<th>Kaina</th>
		<th>PVM</th>
		<th>Antkainis</th>
		<th></th>
    </tr>

    @foreach($furnitures as $furniture)

    <tr>
    <td>{{$furniture->id_Baldas}}</td>
    <td>{{$furniture->pavadinimas}}</td>
    <td>{{$furniture->pardPav}}</td>
    <td>{{$furniture->matavimo_vienetas}}</td>
    <td>{{$furniture->prekiu_kiekis}}</td>
    <td>{{$furniture->prekes_kaina}}</td>
    <td>{{$furniture->mokestis_PVM}}</td>
    <td>{{$furniture->antkainis}}</td>
    <td>
        <a href="{{ action('BaldaiController@edit', [$furniture->id_Baldas]) }}">Redaguoti</a>    
    </td>
    <td>
    <form method="POST" action="{{ route('furnitures.destroy', [$furniture->id_Baldas]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>

    @endforeach

    
    
</table>
 @endsection