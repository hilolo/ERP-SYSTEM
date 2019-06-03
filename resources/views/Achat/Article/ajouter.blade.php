@extends('layouts.achat')

@section('content')
<div class="content-header row mb-1">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Clients</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Achat</a>
                  </li>
                  <li class="breadcrumb-item "><a href="#">Articles</a>
                  </li>
                  <li class="breadcrumb-item active"><a href="/Vente/AjouterArticle">Ajouter Articles</a>
                  </li>

                  
                </ol>
              </div>
            </div>
          </div>
         

          
        </div>

        <section id="add-payment">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Ajouter Article
                    </h4>
                </div>

                
                <div class="card-content">
                    <div class="card-body">
                        <form action="/insertArticle" method="POST"  enctype="multipart/form-data">
                                     {{ csrf_field() }}

                                      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Image</h4>
            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
         
          </div>
            <div class="card-content collapse show">
            <div class="card-body">
             <div class="form-group">
                                        <label class="sr-only">Select File</label>
                                        <label id="o"  class="file center-block" name="o">
                                            <input type="file" name="filee" id="filee">
                                            <span class="file-custom"></span>
                                        </label>
                                    </div>
              
            </div>
          </div>
        </div>
    </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="trans-type">
                                             Type Article
                                           
                                        </label>
                                        <div class="form-group">
                                            <select class="form-control" id="trans-type" name="ttt">
                                                <option value="1">
                                                    Consommable 
                                                </option>
                                                <option value="2">
                                                   Service
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="trans-source">
                                            Category Article
                                         
                                        </label>
                                        <div class="form-group">
                                            <select class="form-control" id="trans-source" name="cat">
                                                <option value="1">
                                                    cat1
                                                </option>
                                                <option value="2">
                                                    cat2
                                                </option>
                                                <option value="3">
                                                    cat3
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="trans-to-ac">
                                           Nom Article
                                        </label>
                                       <input class="form-control" id="name" name="name" placeholder=" Nom" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="bank-name">
                                            Taxes à la vente
                                        </label>
                                        <div class="form-group">
                                            <select class="form-control" id="trans-type" name="tva">
                                                <option value="1">
                                                    Exonere de TVA VENTES
                                                </option>
                                                <option value="2">
                                                   TVA 7% VENTES
                                                </option>
                                                 <option value="3">
                                                   TVA 10% VENTES
                                                </option>
                                                 <option value="4">
                                                   TVA 17% VENTES
                                                </option>
                                                 <option value="5">
                                                   TVA 20% VENTES
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="ifsc-code">
                                           Code barre
                                        </label>
                                        <input class="form-control" id="ifsc-code" name="code_b" placeholder="Code barre" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="amount">
                                            Prix
                                            
                                        </label>
                                        <input class="form-control" id="amount"  name="prix" placeholder="Prix" type="number" required="">
                                    </div>
                                </div>
                                
                            </div>
                       
                    </div>
                    <div class="card-footer text-right">
                        <input type="submit" value="Submit" class="btn btn-success mr-1">
                        <input type="reset" value="Cancel" class="btn btn-danger">
                    </div>

                     </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

