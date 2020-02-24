@extends('layouts.appmain')

@section('content')
  <h1>Registruoti pardaveja</h1>
  <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
 
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
      <form method="post" action="{{ route('sellers.store') }}">
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Pardavejas">ID:</label>
              <input type="text" class="form-control" name="id_Pardavejas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="pardavejo_pavadinimas">Pavadinimas:</label>
              <input type="text" class="form-control" name="pardavejo_pavadinimas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pardavejo_PVM_kodas">PVM :</label>
              <input type="text" class="form-control" name="pardavejo_PVM_kodas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pardavejo_adresas">Adresas:</label>
              <input type="text" class="form-control" name="pardavejo_adresas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pardavejo_el_pastas">El. Pastas: </label>
              <input type="email" class="form-control" name="pardavejo_el_pastas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pardavejo_telefono_nr">Telefonas:</label>
              <input type="phone" class="form-control" name="pardavejo_telefono_nr"/>
          </div>
        </p>
       
          <button type="submit" class="btn btn-primary">Prideti</button>
      </form>
  </div>
</div>
 @endsection