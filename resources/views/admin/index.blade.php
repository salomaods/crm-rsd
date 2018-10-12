@extends('layout.app')

@section('content')
  <div class="py-1 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="text-center" style="">Painel do Administrador<br></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center align-items-center flex-grow-1 m-1 bg-info" style="">
    <div class="container">
      <div class="row">
        <div class="bg-primary col-md-3">
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-center">Informaçoes Pessoais</h3>
            </div>
          </div>
          <div class="card"> <img class="card-img-top" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap">
            <ul class="list-group list-group-flush"> 
                       
              <li class="list-group-item text-left"> </li>
              <li class="list-group-item text-left"></li>
            </ul>
          </div><a class="btn btn-secondary m-1" href="{{route('logout')}}">Desconectar</a>
        </div>
        <div class="text-center bg-info col-md-6">
        <a class="btn btn-primary false m-2 w-50" href="{{route('cadastro-cliente')}}">Cadastro de Clientes<br></a>
          <a class="btn btn-primary false m-2 w-50" href="#">Desvincular Cliente<br></a>
          <a class="btn btn-primary false m-2 w-50" href="#">Planos<br></a>
          <a class="btn btn-primary false m-2 w-50" href="#">Propostas<br></a>
          <a class="btn btn-primary false m-2 w-50" href="{{route('role.index')}}">Permissão</a>
          <a class="btn btn-primary false m-2 w-50" href="#">Cadastro de Usuários</a>
          <a class="btn btn-primary false m-2 w-50" href="#">Exportação</a>
          <a class="btn btn-primary false m-2 w-50" href="#">Importação</a></div>
        <div class="col-md-3 bg-primary">
          <div class="card">
            <div class="card-header text-center text-primary"> Ranking de Operadores</div>
            <div class="card-body h-50">
              <h4>Lorem</h4>
              <h6 class="text-muted">Lorem<br></h6>
              <p>Lorem<br></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 p-3">
          <div class="card">
            <div class="card-header bg-primary" contenteditable="true"> Venda Diária</div>
            <div class="card-body">
                <h4 contenteditable="true">Lorem</h4>
                <h6 class="text-muted">Lorem<br></h6>
                <p>Lorem<br></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <div class="card">
            <div class="card-header bg-primary"> Venda Mensal</div>
            <div class="card-body">
              <h4 contenteditable="true">Lorem</h4>
              <h6 class="text-muted">Lorem<br></h6>
              <p>Lorem<br></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <div class="card">
            <div class="card-header bg-primary"> Comparação de Mêses</div>
            <div class="card-body">
              <h4>Lorem<br></h4>
              <h6 class="text-muted">Lorem<br></h6>
              <p>Lorem<br></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6 p-3">
          <div class="card">
            <div class="card-header bg-primary"> Ganha / Perda<br></div>
            <div class="card-body">
              <h4>Lorem<br></h4>
              <h6 class="text-muted">Lorem<br></h6>
              <p>Lorem<br></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
