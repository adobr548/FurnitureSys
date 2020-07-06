@extends('layouts.appmain')

@section('content')
<table>
	<tr>
        <th>ID</th>
		<th>Data</th>
		<th>Preke</th>
		<th>Kiekis</th>
		<th>Kaina</th>
		<th>Suma</th>
		<th>Pirkejas</th>
		<th>Sutartis</th>
  </tr>
     
   @foreach($orders as $order)
    
    <tr>
    <td>{{$order->id_Uzsakymas}}</td>
    <td>{{$order->pristatymo_data}}</td>
    <td>{{$order->uzsakytos_prekes_pavadinimas}}</td>
    <td>{{$order->uzsakymo_kiekis}}</td>
    <td>{{$order->uzsakymo_kaina}}</td>
    <td>{{$order->uzsakymo_suma}}</td>
    <td>{{$order->fk_Pirkejasid_Pirkejas}}</td>
    <td>{{$order->fk_Sutartisid_Sutartis}}</td>
    <td>
    <form method="POST" action="{{ route('orders.destroy', [$order->id_Uzsakymas]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>
    
    @endforeach
    
</table>
 @endsection