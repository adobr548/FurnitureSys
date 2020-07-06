@extends('layouts.appmain')

@section('content')
  
  <style>
  .uper {
    margin-top: 40px;
    padding: 50px;
  }
</style>
<div class="card uper">
<h1>Redaguoti sutarti</h1>
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
    <form method="post" action="{{ action('AgreementController@update', $contract->id_Sutartis) }}">
          <input type="hidden" name="_method" value="PATCH" />
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Sutartis">ID:</label>
              <input type="text" class="form-control" name="id_Sutartis" value="{{$contract->id_Sutartis}}"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="sutarties_data"> Sutarties data:</label>
              <input type="date" class="form-control" name="sutarties_data" value="{{$contract->sutarties_data}}"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="sutarties_pradzios_data">Pradzios data :</label>
              <input type="date" class="form-control" name="sutarties_pradzios_data" value="{{$contract->sutarties_pradzios_data}}"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="sutarties_pabaigos_data">Pabaigos data:</label>
              <input type="date" class="form-control" name="sutarties_pabaigos_data" value="{{$contract->sutarties_pabaigos_data}}"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="sutarties_tipas">Sutarties tipas:</label>
              <input type="text" class="form-control" name="sutarties_tipas" value="{{$contract->sutarties_tipas}}"/>
          </div>
        </p>
        
        <p>
        <label class="field" for="customer">Pirkejas</label>
        <select id="customer" name="fk_Pirkejasid_Pirkejas">
          <option>{{$contract->fk_Pirkejasid_Pirkejas}} </option>
          
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
        <label class="field" for="employee">Darbuotojas</label>
        <select id="employee" name="fk_Darbuotojasid_Darbuotojas">
          <option>{{$contract->fk_Darbuotojasid_Darbuotojas}} </option>
          
          <?php
						
						foreach($employees as $key => $val) {
							$selected = "";
							if(isset($fields['fk_Darbuotojasid_Darbuotojas']) && $fields['fk_Darbuotojasid_Darbuotojas'] == $val['id_Darbuotojas']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['id_Darbuotojas']}'>{$val['id_Darbuotojas']}</option>";
            }
					?>
					
				</select>      
      </p>
     
      <p>
        <label class="field" for="busena">Busena</label>
        <select id="busena" name="busena">
          <option value="1">Galiojanti </option>
          <option value="2">Negaliojanti </option>				
				</select>      
      </p>
        
          <button type="submit" class="btn btn-primary">Redaguoti</button>
      </form>
  </div>
</div>
 @endsection