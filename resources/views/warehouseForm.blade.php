@extends('layouts.appmain')

@section('content')
  
  <style>
  .uper {
    margin-top: 40px;
    padding: 50px;
  }
</style>
<div class="card uper">
<h1>Registruoti sandeli</h1>
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
      <form method="post" action="{{ route('warehouses.store') }}">
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Sandelys">ID:</label>
              <input type="text" class="form-control" name="id_Sandelys"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="sandelio_pavadinimas">Pavadinimas:</label>
              <input type="text" class="form-control" name="sandelio_pavadinimas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="sandelio_adresas">Adresas:</label>
              <input type="address" class="form-control" name="sandelio_adresas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="sandelio_el_pastas">El. Pastas:</label>
              <input type="email" class="form-control" name="sandelio_el_pastas"/>
          </div>
        </p>
       
        
          <button type="submit" class="btn btn-primary">Prideti</button>
      </form>
  </div>
</div>
 @endsection