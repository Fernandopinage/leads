<?php
include_once "../class/classProduto.php";
include_once "../dao/Produto.php";

if (isset($_POST['produto_cadastro'])) {

    $ClassProduto = new ClassProduto();
    $ClassProduto->setProduto($_POST['produto']);
    $ClassProduto->setUnidade($_POST['unidade']);
    //$ClassProduto->setValor($_POST['valor']);
    $ClassProduto->setCodigo($_POST['cod']);
    $ClassProduto->setStatus($_POST['status']);
    //$ClassProduto->setDescricao($_POST['descrcao']);

    $Produto = new ProdutoPAO();
    $Produto->insertProduto($ClassProduto);
}




?>
<br><br>
<div class="card" style="margin-bottom: 20px;">
    <div class="navbar navbar-dark bg-dark navbar-expand-lg" style=" color:#fff; ">
        PRODUTOS
    </div>
</div>
<nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-produto-tab" data-toggle="tab" href="#nav-produto" role="tab" aria-controls="nav-produto" aria-selected="true" style="color: #000;">Produto</a>
    </div>
</nav>
<br>
<hr><br>
<form action="" method="POST">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-produto" role="tabpanel" aria-labelledby="nav-produto-tab">

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="cliente">Código <spam style="color: red;"><strong>*</strong></spam></label>
                    <input type="text" class="form-control form-control-sm" name="cod" id="cod"  placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="cliente">Descrição <spam style="color: red;"><strong>*</strong></spam></label>
                    <input type="text" class="form-control form-control-sm" name="produto" id="produto" placeholder="">
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Unid. Medida</label>
                    <input type="text" class="form-control form-control-sm" name="unidade" id="unidade" placeholder="" >
                </div>
                <div class="form-group col-md-2">
                    <label for="cliente">Status</label>
                    <select class="form-control form-control-sm" id="status" name="status">
                        <option selected value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="text-right">
                <input class="btn btn-success" name="produto_cadastro" type="submit" value="Salvar Produto">
            </div>
</form>
</div>

<script language="javascript" src="../js/mascara_valor.js">
    //onKeyPress="return(moeda(this,'.',',',event))   adicionar essa chamda de função no input
</script>