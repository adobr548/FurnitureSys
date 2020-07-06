@extends('layouts.appmain')

@section('content')


<table>
	<tr>
		<th>Tabelio nr.</th>
		<th>Vardas</th>
		<th>Pavardė</th>
		<th></th>
  </tr>
      
   @foreach($employees as $employee)
    <tr>
    <td>{{$employee->id_Darbuotojas}}</td>
    <td>{{$employee->vardas}}</td>
    <td>{{$employee->pavarde}}</td>
    <td>
        <a href="{{ action('EmployeeController@edit', [$employee->id_Darbuotojas]) }}">Redaguoti</a>    
    </td>
    <td>
    <form method="POST" action="{{ route('employees.destroy', [$employee->id_Darbuotojas]) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Salinti</button>
    </form
    </td>
    </tr>
    @endforeach
</table>
 @endsection