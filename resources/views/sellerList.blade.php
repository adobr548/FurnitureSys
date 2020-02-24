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
    <?php  
   foreach($sellers as $seller){
    echo
    "<tr>"
    . "<td>{$seller->id_Pardavejas}</td>"
    . "<td>{$seller->pardavejo_pavadinimas}</td>"
    . "<td>{$seller->pardavejo_PVM_kodas}</td>"
    . "<td>{$seller->pardavejo_adresas}</td>"
    . "<td>{$seller->pardavejo_el_pastas}</td>"
    . "<td>{$seller->pardavejo_telefono_nr}</td>"
    . "</tr>\n";
    }
    ?>
</table>
 @endsection