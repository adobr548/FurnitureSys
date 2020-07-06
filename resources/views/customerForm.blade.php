@extends('layouts.appmain')

@section('content')
  
  <style>
  .uper {
    margin-top: 40px;
    padding: 50px;
  }
</style>
<div class="card uper">
<h1>Registruoti klienta</h1>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('customers.store') }}">
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Pirkejas">ID:</label>
              <input type="text" class="form-control" name="id_Pirkejas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="pirkejo_pavadinimas">Pavadinimas:</label>
              <input type="text" class="form-control" name="pirkejo_pavadinimas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pirkejo_PVM_kodas">PVM :</label>
              <input type="text" class="form-control" name="pirkejo_PVM_kodas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="adresas">Adresas:</label>
              <input type="text" class="form-control" name="adresas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="el_pastas">El. Pastas: </label>
              <input type="email" class="form-control" name="el_pastas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="telefono_nr">Telefonas:</label>
              <input type="phone" class="form-control" name="telefono_nr"/>
          </div>
        </p>
       
          <button type="submit" class="btn btn-primary">Prideti</button>
      </form>
  </div>
</div>
 @endsection