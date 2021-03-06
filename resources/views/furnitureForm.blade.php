@extends('layouts.appmain')

@section('content')
  
  <style>
  .uper {
    margin-top: 40px;
    padding: 50px;
  }
</style>
<div class="card uper">
<h1>Registruoti baldus</h1>
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
      <form method="post" action="{{ route('furnitures.store') }}">
      <p>
          <div class="form-group">
              @csrf
              <label for="id_Baldas">ID:</label>
              <input type="text" class="form-control" name="id_Baldas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              @csrf
              <label for="pavadinimas">Pavadinimas:</label>
              <input type="text" class="form-control" name="pavadinimas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="matavimo_vienetas">Matavimo vienetas :</label>
              <input type="text" class="form-control" name="matavimo_vienetas"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="prekiu_kiekis">Kiekis:</label>
              <input type="text" class="form-control" name="prekiu_kiekis"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="prekes_kaina">Prekes kaina:</label>
              <input type="text" class="form-control" name="prekes_kaina"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="mokestis_PVM">PVM mokestis:</label>
              <input type="text" class="form-control" name="mokestis_PVM"/>
          </div>
        </p>
        <p>
          <div class="form-group">
              <label for="antkainis">Antkainis:</label>
              <input type="text" class="form-control" name="antkainis"/>
          </div>
        </p>
        <p>
        <label class="field" for="seller">Pardavejas</label>
        <select id="seller" name="fk_Pardavejasid_Pardavejas">
          <option value="-1">Pasirinkite </option>
          
          <?php
						
						foreach($sellers as $key => $val) {
							$selected = "";
							if(isset($fields['fk_Pardavejasid_Pardavejas']) && $fields['fk_Pardavejasid_Pardavejas'] == $val['id_Pardavejas']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['id_Pardavejas']}'>{$val['pardavejo_pavadinimas']}</option>";
            }
					?>
					
				</select>      
      </p>
          <button type="submit" class="btn btn-primary">Prideti</button>
      </form>
  </div>
</div>
 @endsection