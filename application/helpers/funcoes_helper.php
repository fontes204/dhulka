<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 27/04/18
 * Time: 12:53
 * @param $alerta
 * @param $sms
 * @param $titulo
 * @return string
 */

 function callback($alerta,$sms,$titulo,$src=null)
{
    $calback['alerta']=$alerta;
    $calback['sms']=$sms;
    $calback['titulo']=$titulo;
    $calback['src']=$src;
    return "[".json_encode($calback)."]";
}

function dispensado()
{
    return array("Actualizar","Eliminar","add_privilegio","Fisica"," ",null,"Juridica","detalhe","Enviar","Adicionar Conta","Dashboard","Parecer","Coordenar","Ver_parecer","Projectar","Terreno","Servico","aquisicao","Listar Tereno","detalhe terreno");
}

function master()
{
    return "Master";
}

/**
 * @param array $nome
 * @param array $link
 * @param array $fa
 * @param array $cor
 * @return array
 */
function dinamic_menu_topo($nome=array(), $link=array(), $fa=array(), $cor=array())
{
    return array(
        'nome'=>$nome,
        'link'=>$link,
        'fa'=>$fa,
        'cor'=>$cor
    );
}

function permitido()
{
    return array("app","dashboard","utilizador","perfil");
}

/**
 * @param $estado
 * @param $genero
 * @return null|string
 */
function estado_civil($estado, $genero)
{
    $ret=null;
    switch ($estado)
    {
        case "C":
            if($genero=="F")
                $ret="Casada";
            else
                $ret="Casado";
            break;
        case "D":
            if($genero=="F")
                $ret="Divorciada";
            else
                $ret="Divorciado";
            break;
        case "S":
            if($genero=="F")
                $ret="Solteira";
            else
                $ret="Solteiro";
            break;
        case "V":
            if($genero=="F")
                $ret="Viúva";
            else
                $ret="Viúvo";
            break;
    }
    return $ret;
}

function gerarNumeroOrdem($numeroOrdem)
{
    if(strlen($numeroOrdem)==1)
        return "00".$numeroOrdem;
    elseif(strlen($numeroOrdem)==2)
        return "0".$numeroOrdem;
    elseif(strlen($numeroOrdem)==3)
        return $numeroOrdem;
}

/**
 * @param $id_utente
 * @return string
 */
function gerarNumeroProcesso($sequencia,$assunto)
{
    return gerarNumeroOrdem((string)$sequencia)."/$assunto/".date('y');
}

/**
 * @param $idTerreno
 * @return string
 */
function gerarParteNumerica($idTerreno)
{
    $idTerreno=$idTerreno.""; //concatennar com caracter vazio, passar para string
    $idTerreno.rtrim($idTerreno);// eliminar espaco vazio
    if (strlen($idTerreno) == 1) {//controlar a qtd de caracteres
        return "0000" . $idTerreno; //concatena para ter 5  carecteres representativos do numero do terreno
    } else
        if (strlen($idTerreno) == 2) {
            return "000" . $idTerreno;
        } else
            if (strlen($idTerreno) == 3) {
                return "00" . $idTerreno;
            } else
                if (strlen($idTerreno) == 4) {
                    return "0" . $idTerreno;
                }

    return  "";
}

/**
 * @param $provincia
 * @param $municipio
 * @param $comuna
 * @param $idTerreno
 * @return string
 */
function gerarCodigoTerreno($municipio, $comuna, $idTerreno)
{
    $municipio=strtoupper($municipio);
    $comuna=strtoupper($comuna);
    return substr($municipio,0,1).substr($municipio,strlen($municipio)-1,1).
        substr($comuna,0,1).substr($comuna,strlen($comuna)-1,1).
        gerarParteNumerica($idTerreno);
}

 function area($a,$b)
{
    return $a*$b;
}

function soNumero($str)
{
    return preg_replace("/[^0-9]/","",$str);
}
 function tempoEspera($d1,$d2)
{
    $data1=new DateTime($d1);
    $data2=new DateTime($d2);
    $tempoE=$data1->diff($data2);
    $ret=$tempoE->format('%R%a dia');
    if(soNumero($ret)==1)
        return $ret;
    else{
        $ret=$tempoE->format('%R%a dias');
        return $ret;
    }
}

function user_name($param)
{
    $user=explode(" ",$param);
    $res=null;
    for ($i=0;$i<count($user);$i++)
    {
        $res=$user[0]." ".$user[$i];
    }

    return $res;
}

function nome_utente($param)
{
    $user=explode(" ",$param);
    $res=null;
    for ($i=0;$i<count($user);$i++)
    {
        $res=$user[0]." ".$user[0+2]." ".$user[$i];
    }

    return $res;
}

//$menus_topo=array(
//    'nome'=>array('Listar Repartição','Listar Utilizador','Listar Município','Listar Grupo'),
//    'link'=>array('reparticao/listar','utilizador/listar','municipio/listar','grupo/listar'),
//    'fa'=>array('fa-comments','fa-shopping-cart','fa-globe','fa-users'),
//    'cor'=>array('blue','purple','yellow-lemon','green')
//);

function upload ($tmp, $nome, $largura,$a, $pasta)
{
    $img = imagecreatefromjpeg($tmp);
    $x   = imagesx($img);
    $y   = imagesy($img);
    $altura = ($largura * $y) / $x;
    $nova  = imagecreatetruecolor($largura, $a);

    imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $a, $x, $y);
    imagejpeg($nova, "$pasta/$nome");
    imagedestroy($nova);
    imagedestroy($img);
    return($nome);
}
function upload_png ($tmp, $nome, $largura,$a, $pasta)
{
    $img = imagecreatefrompng($tmp);
    $x   = imagesx($img);
    $y   = imagesy($img);
    $altura = ($largura * $y) / $x;
    $nova  = imagecreatetruecolor($largura, $a);

    imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $a, $x, $y);
    imagepng($nova, "$pasta/$nome");
    imagedestroy($nova);
    imagedestroy($img);
    return($nome);
}

function codigo_utente($sequencia,$tipo)
{
    return gerarNumeroOrdem((string)$sequencia)."-".$tipo."-".date('y');
}