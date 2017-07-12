<?php

/**
 * Created by PhpStorm.
 * User: Thiago Cunha
 * Date: 10/07/2017
 * Time: 23:19
 */
class Portfolio extends model {

    public function getTrabalhos ($quantidadeDeItens = '') {
        $array = array();
        $sql = "SELECT * FROM portfolio ";
        if (!empty($quantidadeDeItens)) {
            $sql .= "LIMIT ".$quantidadeDeItens;
        }
        $sql = $this->db->query($sql);
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }

}