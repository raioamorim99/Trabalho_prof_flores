/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
 25148436-2 - Carlos Eduardo Galdino Sousa 
 25001132-2 - Cauã Chaerki Bobato
 25161143-2 - Gabriel Hikari Uchida Requião 
 25229817-2 - Guilherme Garcia Da Cruz 
 25201449-2 - Luan Raio Amorim 
 25119616-2 - Lucas Henrique Zeferino
 25165588-2 - Maikon V. Duarte dos Santos
 25178371-2 - Pedro Henrique Santos Sinhuk

Data: 08 de Outubro de 2025
Descritivo: Crie uma função inverterString que receba uma string e a retorne invertida, sem usar a função strrev().
*******************************************************************************/

<?php
function inverterString($str){ $invertida=''; for($i=strlen($str)-1;$i>=0;$i--){ $invertida.=$str[$i]; } return $invertida; }
echo inverterString('PHP');
?>