<?php
// quebra de string grandes

$txt = "PHP é uma linguagem interpretada livre, usada originalmente apenas para o 
desenvolvimento de aplicações presentes e atuantes no lado do servidor, 
capazes de gerar conteúdo dinâmico na World Wide Web.";


$res = wordwrap($txt, 30, "<br>\n", false);
echo $res;

?>
