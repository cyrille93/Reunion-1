@extends('layouts/layout_allView')

<div class="row mt">
          <div class="col-lg-8 align-items-center">
            <h4><i class="fa fa-angle-right"></i> CREER UNE NOUVELLE TONTINE</h4>
            <div class="form-panel">
              <div class=" form" method="POST">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nom Reunion (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="nom_reunion" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nom Tontine(Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="sigle" minlength="2" type="text" required />
                    </div>
                  </div> 
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Montant A Tontiner(Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" placeholder="" name="nom_fondateur" minlength="2" type="text" required />
                    </div>
                  </div>  
                  <div class="form-group">
                  <label class="control-label col-lg-2">Date De Creation (Obligatoire)</label>
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
                  <label class="control-label col-lg-2">Date De fin Prévue </label>
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
                  <label class="control-label col-lg-2">Date Fin Véritable </label>
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