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
      <form method="post" action="{{ route('orders.store') }}">
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Uzsakymas">ID:</label>
              <input type="text" class="form-control" name="id_Uzsakymas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="uzsakytos_prekes_pavadinimas">Uzsakytos prekes pavadinimas:</label>
              <input type="text" class="form-control" name="uzsakytos_prekes_pavadinimas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="uzsakymo_kiekis"> Kiekis :</label>
              <input type="text" class="form-control" name="uzsakymo_kiekis"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="uzsakymo_kaina">Kaina:</label>
              <input type="text" class="form-control" name="uzsakymo_kaina"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="uzsakymo_suma">Suma:</label>
              <input type="text" class="form-control" name="uzsakymo_suma"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="pristatymo_data"> Pristatymo data:</label>
              <input type="date" class="form-control" name="pristatymo_data"/>
          </div>
        </p>
        
        <p>
        <label class="field" for="customer">Pirkejas</label>
        <select id="customer" name="fk_Pirkejasid_Pirkejas">
          <option value="-1">Pasirinkite </option>
          
          <?php
						
						foreach($customers as $key => $val) {
							$selected = "";
							if(isset($fields['fk_Pirkejasid_Pirkejas']) && $fields['fk_Pirkejasid_Pirkejas'] == $val['id_Pirkejas']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['id_Pirkejas']}'>{$val['id_Pirkejas']}</option>";
            }
					?>
					
				</select>      
      </p>

      <p>
        <label class="field" for="contract"> Sutartis</label>
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