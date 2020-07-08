@extends('layouts.appmain')

@section('content')


<table>
	<tr>
        <th>ID</th>
		<th>Pirkejo kodas</th>
		<th>Saskaitos nr</th>
		<th>Data</th>
		<th>Apmoketa suma</th>
        <th>Mokejimo budas</th>
  </tr>  
   @foreach($payments as $payment)
  
    <tr>
    <td>{{$payment->id_Mokejimas}}</td>
    <td>{{$payment->fk_Pirkejasid_Pirkejas}}</td>
    <td>{{$payment->fk_Saskaitaid_Saskaita}}</td>
    <td>{{$payment->data}}</td>
    <td>{{$payment->mokejimo_suma}}</td>
    <td>{{$payment->mokejimo_budas}}</td>
    </tr>

    @endforeach
</table>
 @endsection