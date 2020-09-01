
@extends('layouts/layout_allView')
@extends('layouts/layout_Dash')



         
 @section('content')
        <div class="row">
              <!-- form input mask -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>CREER UN PROJET</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                   <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Titre Projet</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">couverture  Projet</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" class="form-control" data-inputmask="'mask' : '(999) 999-9999'">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Contenu Projet</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Annuler</button>
                          <button type="submit" class="btn btn-success">Enregistrer</button>
                          
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                 </div>
             

      </div>
  @endsection
 