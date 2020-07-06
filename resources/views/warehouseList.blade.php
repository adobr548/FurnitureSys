@extends('layouts.appmain')

@section('content')


<table>
	<tr>
		<th>Nr.</th>
		<th>Pavadinimas</th>
		<th>Adresas</th>
		<th>El. Pastas</th>
		<th></th>
  </tr>
      
   @foreach($warehouses as $warehouse)

    <tr>
    <td>{{$warehouse->id_Sandelys}}</td>
    <td>{{$warehouse->sandelio_pavadinimas}}</td>
    <td>{{$warehouse->sandelio_adresas}}</td>
    <td>{{$warehouse->sandelio_el_pastas}}</td>
    <td>
    <form method="POST" action="{{ route('warehouses.destroy', [$warehouse->id_Sandelys]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>
    
    @endforeach
</table>
 @endsection