@extends('layouts.appmain')

@section('content')
  
  <style>
  .uper {
    margin-top: 40px;
    padding: 50px;
  }
</style>
<div class="card uper">
<h1>Redaguoti darbuotoja</h1>
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
      <form method="post" action="{{ action('EmployeeController@update', $employee->id_Darbuotojas) }}">
          <input type="hidden" name="_method" value="PATCH" />
        <p>
          <div class="form-group">
              @csrf
              <label for="vardas">Vardas:</label>
              <input type="text" class="form-control" name="vardas" value="{{$employee->vardas}}"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pavarde">Pavarde :</label>
              <input type="text" class="form-control" name="pavarde" value="{{$employee->pavarde}}"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="id_Darbuotojas">ID:</label>
              <input type="text" class="form-control" name="id_Darbuotojas" value="{{$employee->id_Darbuotojas}}"/>
          </div>
        </p>
          <button type="submit" class="btn btn-primary">Redaguoti</button>
      </form>
  </div>
</div>
 @endsection