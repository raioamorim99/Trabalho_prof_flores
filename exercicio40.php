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
Descritivo: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
*******************************************************************************/

<?php
function mostrarCarro($carro){
  foreach($carro as $chave => $valor){ echo "$chave: $valor\n"; }
}
$carro = ['Marca'=>'Fiat','Modelo'=>'Uno','Ano'=>2020];
mostrarCarro($carro);
?>