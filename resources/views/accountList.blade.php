@extends('layouts.appmain')

@section('content')
<table>
	<tr>
        <th>Nr</th>
		<th>Data</th>
		<th>Preke</th>
		<th>Kiekis</th>
		<th>Kaina</th>
		<th>Suma</th>
		<th>Sutartis</th>
  </tr>
      
   @foreach($accounts as $account)

    <tr>
    <td>{{$account->id_Saskaita}}</td>
    <td>{{$account->saskaitos_data}}</td>
    <td>{{$account->prekes_pavadinimas}}</td>
    <td>{{$account->kekis}}</td>
    <td>{{$account->kaina}}</td>
    <td>{{$account->suma}}</td>
    <td>{{$account->fk_Sutartisid_Sutartis}}</td>
    <td>
    <form method="POST" action="{{ route('accounts.destroy', [$account->id_Saskaita]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>
    @endforeach
</table>
 @endsection