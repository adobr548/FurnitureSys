@extends('layouts.appmain')

@section('content')
  <h1>Registruoti</h1>
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
      <form method="post" action="{{ route('accounts.store') }}">
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Saskaita">ID:</label>
              <input type="text" class="form-control" name="id_Saskaita"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="saskaitos_data">Saskaitos data:</label>
              <input type="date" class="form-control" name="saskaitos_data"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="prekes_pavadinimas"> Prekes Pavadinimas :</label>
              <input type="text" class="form-control" name="prekes_pavadinimas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="kekis">Kiekis:</label>
              <input type="text" class="form-control" name="kekis"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="kaina">Kaina:</label>
              <input type="text" class="form-control" name="kaina"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="suma"> Suma:</label>
              <input type="text" class="form-control" name="suma"/>
          </div>
        </p>
        
        <p>
        <label class="field" for="contract">Sutartis</label>
        <select id="contract" name="fk_Sutartisid_Sutartis">
          <option value="-1">Pasirinkite </option>
          
          <?php
						
						foreach($contracts as $key => $val) {
							$selected = "";
							if(isset($fields['fk_Sutartisid_Sutartis']) && $fields['fk_Sutartisid_Sutartis'] == $val['id_Sutartis']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['id_Sutartis']}'>{$val['id_Sutartis']}</option>";
            }
					?>
					
				</select>      
      </p>

      

          <button type="submit" class="btn btn-primary">Prideti</button>
      </form>
  </div>
</div>
 @endsection