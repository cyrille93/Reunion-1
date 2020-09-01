@extends('layouts/layout_allView')

<div class="row mt">
          <div class="col-lg-8 align-items-center">
            <h4><i class="fa fa-angle-right"></i> AJOUETER UN NOUVEAU ADHERANT</h4>
            <div class="form-panel">
              <div class=" form" method="POST">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Nom (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Prénom (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" name="prenom" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">CNI (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" placeholder="numero carte d'identité ou passport" name="cni" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Téléphone (Obligatoire)</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" placeholder="695 038 584" name="telephone" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="control-label col-lg-2">Date adhesion (Obligatoire)</label>
                  <div class="col-lg-9">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="01-01-2014" size="16" class="form-control">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Select date</span>
                  </div>
                </div>
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">pseudo</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="cname" placeholder="surnom" name="pseudo" minlength="2" type="text" required />
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