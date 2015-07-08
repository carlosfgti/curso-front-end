<h1 class="titulo-pg-painel">Listagem  dos Produtos (250):</h1>

<div class="divider"></div>

<div class="col-md-12">

	<form class="form-padrao form-inline padding-20">
		<a href="" class="btn-cadastrar" data-toggle="modal" data-target="#modalGestao"><i class="fa fa-plus-circle"></i> Cadastrar</a>
		<input type="text" placeholder="Pesquisa">
	</form>
</div>

<table class="table table-hover">
	<tr>
		<th>Cod.</th>
		<th>Nome</th>
		<th>Preço</th>
		<th width="70px;"></th>
	</tr>
	<tr>
		<td>1</td>
		<td>Nome Produto</td>
		<td>Preço</td>
		<td>
			<a class="edit" data-toggle="modal" data-target="#modalGestao"  href="">
				<i class="fa fa-pencil-square-o"></i>
			</a>
			<a class="delete" href="" data-toggle="modal" data-target="#modalConfirmacaoDeletar">
				<i class="fa fa-times"></i>
			</a>
		</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Nome Produto</td>
		<td>Preço</td>
		<td>
			<a class="edit" data-toggle="modal" data-target="#modalGestao"  href="">
				<i class="fa fa-pencil-square-o"></i>
			</a>
			<a class="delete" href="" data-toggle="modal" data-target="#modalConfirmacaoDeletar">
				<i class="fa fa-times"></i>
			</a>
		</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Nome Produto</td>
		<td>Preço</td>
		<td>
			<a class="edit" data-toggle="modal" data-target="#modalGestao"  href="">
				<i class="fa fa-pencil-square-o"></i>
			</a>
			<a class="delete" href="" data-toggle="modal" data-target="#modalConfirmacaoDeletar">
				<i class="fa fa-times"></i>
			</a>
		</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Nome Produto</td>
		<td>Preço</td>
		<td>
			<a class="edit" data-toggle="modal" data-target="#modalGestao"  href="">
				<i class="fa fa-pencil-square-o"></i>
			</a>
			<a class="delete" href="" data-toggle="modal" data-target="#modalConfirmacaoDeletar">
				<i class="fa fa-times"></i>
			</a>
		</td>
	</tr>
	<tr>
		<td>1</td>
		<td>Nome Produto</td>
		<td>Preço</td>
		<td>
			<a class="edit" data-toggle="modal" data-target="#modalGestao"  href="">
				<i class="fa fa-pencil-square-o"></i>
			</a>
			<a class="delete" href="" data-toggle="modal" data-target="#modalConfirmacaoDeletar">
				<i class="fa fa-times"></i>
			</a>
		</td>
	</tr>
</table>

<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>




<!-- Modal Para Gestão de Conteúdo -->
<div class="modal fade" id="modalGestao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-padrao4">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Gestão</h4>
      </div>
      <div class="modal-body">
        <form class="form-padrao">
			<div class="form-group">
				<input type="text" name="cod" class="form-control" placeholder="Código">
			</div>
			<div class="form-group">
				<input type="text" name="nome" class="form-control" placeholder="Nome">
			</div>
			<div class="form-group">
				<input type="text" name="preco" class="form-control" placeholder="Preço">
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Recuperar</button>
      </div>
    </div>
  </div>
</div>




<!-- Modal Para Gestão de Conteúdo -->
<div class="modal fade" id="modalConfirmacaoDeletar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-padrao5">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Deletar</h4>
      </div>
      <div class="modal-body">
        <p>Deseja realmente deletar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Deletar</button>
      </div>
    </div>
  </div>
</div>