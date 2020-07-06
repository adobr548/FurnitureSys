@extends('layouts.appmain')

@section('content')


<table>
	<tr>
		<th>ID</th>
		<th>Pavadinimas</th>
		<th>Adresas</th>
		<th>PVM kodas</th>
		<th>Telefono nr</th>
		<th>El.Pastas</th>
		<th></th>
  </tr>
      
   @foreach($customers as $customer)
    
    <tr>
    <td>{{$customer->id_Pirkejas}}</td>
    <td>{{$customer->pirkejo_pavadinimas}}</td>
    <td>{{$customer->adresas}}</td>
    <td>{{$customer->pirkejo_PVM_kodas}}</td>
    <td>{{$customer->telefono_nr}}</td>
    <td>{{$customer->el_pastas}}</td>
    <td>
    <form method="POST" action="{{ route('customers.destroy', [$customer->id_Pirkejas]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>

    @endforeach
    
</table>
 @endsection