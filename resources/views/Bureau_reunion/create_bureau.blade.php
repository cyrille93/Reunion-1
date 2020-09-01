@extends('layouts/layout_allView')
<h2>ENREGISTRER LES MEMBRES DU BUREAU</h2>
<div class=" form" method="POST">
<form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Président (Obligatoire)</label>
<div class="col-lg-9">
  <select class="form-control" >
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Vice President (Obligatoire)</label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Secretaire (Obligatoire)</label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Vice Secretaire </label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Censeur (Obligatoire)</label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Vice Censeur </label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Commissaire Au Compte (Obligatoire)</label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Tresorier (Obligatoire)</label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group ">
<label for="cname" class="control-label col-lg-2">Vice Tresorier </label>
<div class="col-lg-9">
  <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
  </select>
 </div>
</div>
<div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Valider</button>
                      <button class="btn btn-theme04" type="button">Annuler</button>
                    </div>
                  </div>

</form>
</div>