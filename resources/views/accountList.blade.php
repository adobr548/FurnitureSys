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
    <?php  
   foreach($accounts as $account){
    echo
    "<tr>"
    . "<td>{$account->id_Saskaita}</td>"
    . "<td>{$account->saskaitos_data}</td>"
    . "<td>{$account->prekes_pavadinimas}</td>"
    . "<td>{$account->kekis}</td>"
    . "<td>{$account->kaina}</td>"
    . "<td>{$account->suma}</td>"
    . "<td>{$account->fk_Sutartisid_Sutartis}</td>"
    . "</tr>\n";
    }
    ?>
</table>
 @endsection