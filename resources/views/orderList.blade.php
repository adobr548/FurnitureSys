@extends('layouts.appmain')

@section('content')
<table>
	<tr>
        <th>ID</th>
		<th>Data</th>
		<th>Preke</th>
		<th>Kiekis</th>
		<th>Kaina</th>
		<th>Suma</th>
		<th>Pirkejas</th>
		<th>Sutartis</th>
  </tr>
    <?php  
   foreach($orders as $order){
    echo
    "<tr>"
    . "<td>{$order->id_Uzsakymas}</td>"
    . "<td>{$order->pristatymo_data}</td>"
    . "<td>{$order->uzsakytos_prekes_pavadinimas}</td>"
    . "<td>{$order->uzsakymo_kiekis}</td>"
    . "<td>{$order->uzsakymo_kaina}</td>"
    . "<td>{$order->uzsakymo_suma}</td>"
    . "<td>{$order->fk_Pirkejasid_Pirkejas}</td>"
    . "<td>{$order->fk_Sutartisid_Sutartis}</td>"
    . "</tr>\n";
    }
    ?>
</table>
 @endsection