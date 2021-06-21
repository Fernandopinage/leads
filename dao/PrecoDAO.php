<?php 


include_once "../dao/DAO.php";
include_once "../class/classPreco.php";


Class PrecoDAO extends DAO{

    public function insertPreco( ClassPreco $ClassPreco){

        $sql = "INSERT INTO `tab_tpp`(`TAB_TPP_ID`, `TAB_TPP_COD`, `TAB_TPP_DESC`, `TAB_TPP_DATA`, `TAB_TPP_TERMINO`, `TAB_TPP_PRODUTO`, `TAB_TPP_VALOR`) VALUES (null, :TAB_TPP_COD, :TAB_TPP_DESC, :TAB_TPP_DATA, :TAB_TPP_TERMINO, :TAB_TPP_PRODUTO, :TAB_TPP_VALOR)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(':TAB_TPP_COD',$ClassPreco->getCod());
        $insert->bindValue(':TAB_TPP_DESC',$ClassPreco->getDesc());
        $insert->bindValue(':TAB_TPP_DATA',$ClassPreco->getData());
        $insert->bindValue(':TAB_TPP_TERMINO',$ClassPreco->getTermino());
        $insert->bindValue(':TAB_TPP_PRODUTO',$ClassPreco->getProduto());
        $insert->bindValue(':TAB_TPP_VALOR',$ClassPreco->getValor());
        $insert->execute();
    }
}

?>