@extends('layouts.appmain')

@section('content')


<table>
	<tr>
		<th>Tabelio nr.</th>
		<th>Vardas</th>
		<th>Pavardė</th>
		<th></th>
  </tr>
    <?php  
   foreach($employees as $employee){
    echo
    "<tr>"
    . "<td>{$employee->id_Darbuotojas}</td>"
    . "<td>{$employee->vardas}</td>"
    . "<td>{$employee->pavarde}</td>"
    . "</tr>\n";
    }
    ?>
</table>
 @endsection