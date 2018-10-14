@extends('layout.app')

@section('content')
      <div class="py-5" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                <li class="nav-item"> <a href="" class="active nav-link" data-toggle="tab" data-target="#tabone">Pessoa Física</a> </li>
                <li class="nav-item"> <a class="nav-link" href="" data-toggle="tab" data-target="#tabtwo">Pessoa Jurídica<br></a> </li>
              </ul>
              <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="tabone" role="tabpanel">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-12 p-4">
                        <h3 class="mb-3">Pessoa Física<br></h3>
                        <form method="post" action="{{route('client.store')}}" class="">
                          {{csrf_field()}}
                          <div class="form-row">
                            <div class="form-group col-md-12"> <input type="text" class="form-control" name="name" id="form36" placeholder="Nome" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12"> <input type="email" class="form-control" name="email" id="form36" placeholder="E-mail" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12"> <input type="text" class="form-control" name="cpf" id="form36" placeholder="CPF" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="cep" id="form40" placeholder="CEP" required="required"> </div>
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="bairro" id="form41" placeholder="Bairro" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="cidade" id="form40" placeholder="Cidade" required="required"> </div>
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="telefone" id="form41" placeholder="Telefone" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12"> <input type="text" class="form-control" name="celular" id="form40" placeholder="Celular" > </div>
                          </div>
                             <button type="submit" class="btn btn-primary w-25">Cadastrar<br></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tabtwo" role="tabpanel">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-12 p-4">
                        <h3 class="mb-3">Pessoa Jurídica<br></h3>
                        <form method="post" action="{{route('client.store')}}" class="">
                            {{csrf_field()}}
                          <div class="form-row">
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="nameJudicial" id="form36" placeholder="Nome Judicial" required="required"> </div>
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="CNPJ" id="form37" placeholder="CNPJ" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12"> <input type="text" class="form-control" name="razaoSocial" id="form36" placeholder="Razão Social" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-12"> <input type="email" class="form-control" name="email" id="form36" placeholder="E-mail" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="cep" id="form40" placeholder="CEP" required="required"> </div>
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="bairro" id="form41" placeholder="Bairro" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="cidade" id="form40" placeholder="Cidade" required="required"> </div>
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="telefone" id="form41" placeholder="Telefone" required="required"> </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6"> <input type="text" class="form-control" name="celular" id="form40" placeholder="Celular" required="required"> </div>
                          </div>
                             <button type="submit" class="btn btn-primary w-25">Cadastrar<br></button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
