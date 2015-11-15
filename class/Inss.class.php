<?php

class Inss{
    public function Calculo($salario){
        if ($salario > 0 && $salario <= 1399.12){
            $aliquota = 8;
            $teto = 'Não';
            } elseif ($salario >= 1399.13 && $salario <= 2331.88) {
                $aliquota  = 9;
                $teto = 'Não';
            } elseif ($salario >=  2331.89 && $salario <= 4663.75) {
                $aliquota  = 11;
                $teto = 'Não';
            } elseif ($salario >= 4663.76) {
                $aliquota  = 11;
                $teto = "TETO";
            }
            return array ($aliquota,$teto);
            }
            
}

