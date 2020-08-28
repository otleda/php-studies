
## Variáveis
___
_Variaveis, nada mais é que um espaço reservado na memória, temporariamente._

_declaramos elas no PHP, dessa forma mostrado abaixo:_  
```sh
$name  ou  $myName   
```

**DICA:**
> ### ***unset()***  -  _Essa função é nativa no php, ela limpa a variavel._  


> ### ***isset()***  - _Essa função tambem é nativa, ela apresenta a váriavel se existir._
<br>

## Conctenação
---

Conctenação no __PHP__ é muito simples, usamos o ponto ```[.]```, para a conctenação. Em outras linguagens, é usado o sinal de ``` [+] ```, exemplo o **JavaScript**. 

```sh
<?php
  
  $name = "Adelto";
  $lastName ="Almeida";

  if(isset($name)) { 
    $resut = $name ." ".$lastName;
  }

  echo $resul;
?>
```
<br>

## Variáveis Super Globais
___
Várias variáveis pré-definidas no PHP são **"SUPERGLOBAIS"**, que significa que elas estão disponível em todos escopos para todo o script. Não há necessidade de fazer **_global $variable_**; para acessá-lo dentro de funções ou métodos.

