@extends('layouts.appmain')

@section('content')


<table>
	<tr>
		<th>Nr.</th>
		<th>Data</th>
		<th>Pr Data</th>
		<th>Pb Data</th>
		<th>Tipas</th>
		<th>Pirkejas</th>
		<th>Darbuotojas</th>
		<th>Busena</th>
  </tr>
     
   @foreach($contracts as $contract)
    
    <tr>
    <td>{{$contract->id_Sutartis}}</td>
    <td>{{$contract->sutarties_data}}</td>
    <td>{{$contract->sutarties_pradzios_data}}</td>
    <td>{{$contract->sutarties_pabaigos_data}}</td>
    <td>{{$contract->sutarties_tipas}}</td>
    <td>{{$contract->fk_Pirkejasid_Pirkejas}}</td>
    <td>{{$contract->fk_Darbuotojasid_Darbuotojas}}</td>
    <td>{{$contract->busena}}</td>
    <td>
        <a href="{{ action('AgreementController@edit', [$contract->id_Sutartis]) }}">Redaguoti</a>    
    </td>
    <td>
    <form method="POST" action="{{ route('contracts.destroy', [$contract->id_Sutartis]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>
    
    @endforeach
    
</table>
 @endsection