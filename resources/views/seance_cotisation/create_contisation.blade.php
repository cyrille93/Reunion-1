@extends('layouts/layout_allView')

<div class="row mt">
          <div class="col-lg-8 align-items-center">
            <h4><i class="fa fa-angle-right"></i> NOUVELLE SEANCE DE COTISATION</h4>
            <div class="form-panel">
              <div class=" form" method="POST">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action=""> 
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Nom  (Obligatoire)</label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Date Du Jour (Obligatoire)</label>
                  <div class="col-lg-9">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="01-01-2014" size="16" class="form-control" name="date_creation">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Heure debut </label>
                  <div class="col-lg-10">
                    <div class="input-group bootstrap-timepicker">
                      <input type="text" class="form-control timepicker-24">
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-2">Heure De Fin </label>
                  <div class="col-lg-10">
                    <div class="input-group bootstrap-timepicker">
                      <input type="text" class="form-control timepicker-24">
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                  </div>
                </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Lieu De La Seance (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="lieu_seance" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Président Du Jour (Obligatoire)</label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Secretaire Du jOUR (Obligatoire)</label>
                 <div class="col-lg-10">
                 <select class="form-control">
                  <option>1</option>
                  <option>2</option>              
                 </select>
                </div>
                </div>
                <div class="form-group ">
                 <label for="cname" class="control-label col-lg-2">Censeur Du Jour (Obligatoire)</label>
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