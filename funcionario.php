<?php

$listaFunciorios = [
    [
        "id" => 1,
        "nome" => "edson rodrigues",
        "email" => "edson@teste.com",
        "telefone" => "(14)9999-9999"
    ],
    [
        "id" => 2,
        "nome" => "alexandra",
        "email" => "alexandra@teste.com",
        "telefone" => "(14)88888-9999"

    ],
    [
        "id" => 3,
        "nome" => "talita",
        "email" => "talita@teste.com",
        "telefone" => "(14)88888-9999"

    ],

    [
        "id" => 4,
        "nome" => "mariana",
        "email" => "mariana@teste.com",
        "telefone" => "(14)88888-9999"

    ],

];
$qtdefucionario = count($listaFunciorios);
//adicionado um item no array pronto
$listaFunciorios[$qtdefucionario]["id"] = 3;
$listaFunciorios[$qtdefucionario]["nome"] = "joão";
$listaFunciorios[$qtdefucionario]["email"] = "joao.teste.com";
$listaFunciorios[$qtdefucionario]["telefone"] = "(14)777-7777";


   // var_dump($lidtaFunciorio);
