<?php
    function converteVelocidade($velocidadeMs) {
        $velocidadeKmh = $velocidadeMs * 3.6;
        return $velocidadeKmh;
    }
    echo converteVelocidade(10);