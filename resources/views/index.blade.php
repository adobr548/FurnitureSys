@extends('layouts.appmain')

@section('content')
  <h1>Registracija</h1>
  <div class='container'>
            <nav>
                <tr>
                   <br><a href='/furnitures/create'> Registruoti baldus</a></br>
                   <br><a href='/contracts/create'> Sudaryti sutarti</a></br>
                   <br><a href='/warehouses/create'> Registruoti sandeli</a></br>
                   <br><a href='/customers/create'> Registruoti klientus</a></br>
                   <br><a href='/employees/create'> Registruoti darbuotojus</a></br>
                   <br><a href='/sellers/create'> Registruoti pardavejus</a></br>
                   <br><a href='/accounts/create'> Sudaryti saskaita</a></br>
                   <br><a href='/orders/create'> Registruoti uzsakyma</a></br>
	            </tr>
            </nav>
        </div>
  
 @endsection