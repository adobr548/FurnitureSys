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
		<th></th>
  </tr>
    <?php  
   foreach($contracts as $contract){
    echo
    "<tr>"
    . "<td>{$contract->id_Sutartis}</td>"
    . "<td>{$contract->sutarties_data}</td>"
    . "<td>{$contract->sutarties_pradzios_data}</td>"
    . "<td>{$contract->sutarties_pabaigos_data}</td>"
    . "<td>{$contract->sutarties_tipas}</td>"
    . "<td>{$contract->fk_Pirkejasid_Pirkejas}</td>"
    . "<td>{$contract->fk_Darbuotojasid_Darbuotojas}</td>"	
    . "</tr>\n";
    }
    ?>
</table>
 @endsection