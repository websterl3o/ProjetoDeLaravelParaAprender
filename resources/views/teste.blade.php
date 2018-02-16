@extends("layouts.principal")

@section('title')
	Teste
@endsection

@section('content')
	<div role="tabpanel" class="tab-pane active" id="home">
    <h1 class="text-center">
  Tecnologia, Qualidade e Confiabilidade
</h1>
<hr>
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="panel panel-primary secondary ">
      <div class="panel-body">
        <img style="width: 400px; margin-bottom: 15px;" class="img-responsive" src="https://br.leagueoflegends.com/sites/default/files/styles/scale_xlarge/public/upload/banner_little_devil_teemo.jpg?itok=jJUbGydf" alt="Home1">
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6" id="blockquoteIndex1">
    <blockquote>
      <center>
        <h1 class="velocidadePlano">O melhor para você!</h1>
      </center>
      <center>
        <h3 style="margin-top: 35px">
          Você pode retirar suas faturas online!  Acesse a aba MINHA  e e tenha acesso a informações exclusivas sobre sua conexão. É rápido, prático e útil!
        </h3>
      </center>
    </blockquote>
  </div>
</div>
<hr>
<div class="row" id="bloco1">
  <div class="col-md-6 col-sm-6" id="blockquoteIndex2">
    <blockquote>
      <center>
        <h1 class="velocidadePlano">A melhor conexão fibra óptica!</h1>
      </center>
      <center>
        <h3 style="margin-top: 35px">
         Mantenha você e sua família conectados o dia todo com um valor que cabe em seu bolso e com a vantagem de não ter surpresas no fim do mês!
        </h3>
      </center>
    </blockquote>
  </div>
  <div class="col-md-6 col-sm-6">
    <div class="panel panel-primary secondary ">
      <div class="panel-body">
         <img style="width: 400px; margin-bottom: 15px;" class="img-responsive" src="https://br.leagueoflegends.com/sites/default/files/styles/scale_xlarge/public/upload/banner_little_devil_teemo.jpg?itok=jJUbGydf" alt="Home2">
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row" id="bloco2">
  <div class="col-md-6 col-sm-6">
    <div class="panel panel-primary secondary ">
      <div class="panel-body">
         <img style="width: 400px; margin-bottom: 15px;" class="img-responsive" src="https://br.leagueoflegends.com/sites/default/files/styles/scale_xlarge/public/upload/banner_little_devil_teemo.jpg?itok=jJUbGydf" alt="Home2">
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6" id="blockquoteIndex2">
    <blockquote>
      <center>
        <h1 class="velocidadePlano">A melhor conexão via rádio!</h1>
      </center>
      <center>
        <h3 style="margin-top: 35px">
         Mantenha você e sua família conectados o dia todo com um valor que cabe em seu bolso e com a vantagem de não ter surpresas no fim do mês!
        </h3>
      </center>
    </blockquote>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-sm-6">
    <div class="panel panel-primary secondary ">
      <div class="panel-body">
         <img style="width: 400px; margin-bottom: 15px;" class="img-responsive" src="https://br.leagueoflegends.com/sites/default/files/styles/scale_xlarge/public/upload/banner_little_devil_teemo.jpg?itok=jJUbGydf" alt="Home3">
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6" id="blockquoteIndex3">
    <blockquote>
      <center>
        <h1 class="velocidadePlano">Indicação Premiada!</h1>
      </center>
      <center>
        <h3 style="margin-top: 35px">
         Quer ganhar 50% de desconto em sua mensalidade? Na , quem indica, ganha! Saiba mais fazendo login em MINHA .
        </h3>
      </center>
    </blockquote>
  </div>
</div>


  </div>
  <div role="tabpanel" class="tab-pane" id="PlanoEmpresa">
    <div id="planoVoce"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="PlanoEmpresarialEmpresa">
    <div id="planoEmpresarial"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="historiaEmpresa">
    <div id="historia"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="localizacaoEmpresa">
    <div id="localizacao"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="contratoEmpresa">
    <div id="contratosTab"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="duvidasEmpresa">
    <div id="duvidas"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="faleConoscoEmpresa">
    <div id="contato"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="areaClienteEmpresa">
    <div id="areaCliente"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="cadastroContrato">
    <div id="cadastro_venda"></div>
  </div>
  <div role="tabpanel" class="tab-pane" id="cadastroPedidoAnalise">
    <div id="pedido_venda"></div>
  </div>
@endsection
