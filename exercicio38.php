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
Descritivo: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi 'Aprovado' (média >= 7) ou 'Reprovado'.
*******************************************************************************/

<?php
function calcularMediaAluno($n1, $n2){
  $media = ($n1+$n2)/2;
  echo 'Média: ' . $media . ' - ' . ($media >= 7 ? 'Aprovado' : 'Reprovado');
}
calcularMediaAluno(8, 6);
?>