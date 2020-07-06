@extends('layouts.appmain')

@section('content')


<table>
	<tr>
        <th>ID</th>
		<th>Pavadinimas</th>
		<th>PVM</th>
		<th>Adresas</th>
		<th>El.pastas</th>
		<th>Telef.Nr.</th>
  </tr>  
   @foreach($sellers as $seller)
  
    <tr>
    <td>{{$seller->id_Pardavejas}}</td>
    <td>{{$seller->pardavejo_pavadinimas}}</td>
    <td>{{$seller->pardavejo_PVM_kodas}}</td>
    <td>{{$seller->pardavejo_adresas}}</td>
    <td>{{$seller->pardavejo_el_pastas}}</td>
    <td>{{$seller->pardavejo_telefono_nr}}</td>
    <td>
    <form method="POST" action="{{ route('sellers.destroy', [$seller->id_Pardavejas]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>

    @endforeach
</table>
 @endsection