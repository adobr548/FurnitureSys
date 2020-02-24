@extends('layouts.appmain')

@section('content')
  <h1>Registruoti </h1>
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
      <form method="post" action="{{ route('employees.store') }}">
        <p>
          <div class="form-group">
              @csrf
              <label for="vardas">Vardas:</label>
              <input type="text" class="form-control" name="vardas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pavarde">Pavarde :</label>
              <input type="text" class="form-control" name="pavarde"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="id_Darbuotojas">ID:</label>
              <input type="text" class="form-control" name="id_Darbuotojas"/>
          </div>
        </p>
        
        
          <button type="submit" class="btn btn-primary">Prideti</button>
      </form>
  </div>
</div>
 @endsection