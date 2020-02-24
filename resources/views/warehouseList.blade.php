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
    <?php  
   foreach($warehouses as $warehouse){
    echo
    "<tr>"
    . "<td>{$warehouse->id_Sandelys}</td>"
    . "<td>{$warehouse->sandelio_pavadinimas}</td>"
    . "<td>{$warehouse->sandelio_adresas}</td>"
    . "<td>{$warehouse->sandelio_el_pastas}</td>"
    . "</tr>\n";
    }
    ?>
</table>
 @endsection