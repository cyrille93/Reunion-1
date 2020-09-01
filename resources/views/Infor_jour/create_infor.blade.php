@extends('layouts/layout_allView')

<div class="row mt">
          <div class="col-lg-8 align-items-center">
            <h4><i class="fa fa-angle-right"></i> créer la cotisation du jour</h4>
            <div class="form-panel">
              <div class=" form" method="POST">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action=""> 
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nombre De Membre (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="nbre_membre" minlength="2" type="text" required />
                    </div>
                  </div>
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Commissaire Au Compte du jour (Obligatoire)</label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>
                  
                  <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Bénéficier 1 (Obligatoire)</label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Bénéficier 2 </label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Bénéficier 3 </label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>  
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Bénéficier 4 </label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div> 
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Bénéficier 5 </label>
                 <div class="col-lg-10">
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
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>