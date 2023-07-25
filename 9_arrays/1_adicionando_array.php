<?php
    #criação de novos indices no array
    #  lista = [1,2,"Andre", 2500] estrutura do array
    #adicionar arrays
    $lista = [];

    print_r($lista);
    echo"<br>";
    echo"<br>";

    $lista[0]="Roberto";    
    $lista[1]= 25;
    $lista[3]="Carlas";
    $lista[1000]="Carlas";


    print_r($lista);
    echo"<br>";

    #somar subtrair mulplicar e dividar 
    $lista[1] *= 25;
    print_r($lista);
    echo"<br>";
    echo"<br>"; 
    echo"<br>"; 

   #somar itens de uma array usando array_sum se conter string vai ser ignorado
   $tabela = [1,3,50,5,6,4,80,9,10,1];
   $soma = array_sum($tabela);
   print_r($tabela);
   echo"<br>"; 
   echo $soma;
   echo"<br>";   



    #array associativo
    $arry = [];
    print_r($arry);    
    echo"<br>";
    $arry["Cachorro"] = "Pug";
    print_r($arry); 
    echo"<br>";
    echo"<br>"; 

    #ordenando array associtivo funçao sort ordem crescente pode ordenar strings
    $val = [1,3,50,5,6,4,80,9,10,1];
    sort($val);
    print_r($val);
    echo"<br>"; 

    #ordenando array associtivo funçao rsort ordem descrecente pode ordenar strings
    $val = [1,3,50,5,6,4,80,9,10,1];
    rsort($val);
    print_r($val);
    echo"<br>"; 
    echo"<br>"; 


   #ordenando array associtivo por chaves e valor ordem crescente valores
     
    $lista = [
      "Mateus" =>29,
      "Pedro" => 15,
      "Andre" =>80,
      "Solange" =>32,  
   ];
    asort($lista);
    print_r($lista);
    echo"<br>";
    echo"<br>"; 

  #ordenando array função arsort associtivo ordem descrecente valores

    $lista = [
      "Mateus" =>29,
      "Pedro" => 15,
      "Andre" =>80,
      "Solange" =>32,  
   ];
    arsort($lista);
    print_r($lista);
    echo"<br>";
    echo"<br>"; 

  #ordenando array função krsort() associtivo ordem crescente usando as chaves

    $lista = [
      "Mateus" =>29,
       "Pedro" => 15,
       "Andre" =>80,
       "Solange" =>32,  
     ];
      ksort($lista);
      print_r($lista);
      echo"<br>";
      echo"<br>"; 


  #ordenando array função krsort() associtivo ordem decrescente usando as chaves

  $lista = [
    "Mateus" =>29,
     "Pedro" => 15,
     "Andre" =>80,
     "Solange" =>32,  
   ];
    krsort($lista);
    print_r($lista);
    echo"<br>";
    echo"<br>"; 


  
  #ordenando array função reverse() associtivo ordem inversa não importa o tipo de dado

  $lista = [
    "Mateus" =>29,
    "Pedro" => 15,
    true,
    "Solange" =>32, 
    [20,30]
   ];
    $lista = array_reverse($lista);
    print_r($lista);
    echo"<br>";
    echo"<br>"; 


    #ordenando array função shuffle() modifica a estrutura atual
    $val5 = range(0,100);
   
    shuffle($val5);
    print_r($lista);
    echo"<br>";
    echo"<br>"; 







  
  
  



    #Adicionar no fim do arry adicionar a atribuição que sera adicionar no final do indice
    echo"<br>";
    echo"<br>";
    $lista = [1,5,6,7];
    $lista[] = "FIM";
    print_r($lista);
    echo"<br>";
    echo"<br>";

    # criar array range  ex range(1,1000);
    $lista = range(0, 100);
    print_r($lista);
    echo"<br>";
    echo"<br>";

     # criar array range  ex range(1,200);  vamos usar step ou seja intervalos
     $lista = range(0, 200, 2);
     print_r($lista);
    echo"<br>";
    echo"<br>";

    # contar arry
    $lista = range(0, 200, 2);
    echo count($lista);
    echo"<br>";
    echo"<br>";

    $lista1= ["Andre" => "25", "Salario"=>2500, "Localização" =>"Brasil"];
    echo count($lista). "<br><br>";

    #descobrindo as chaves e valores dos array associativos

    $chave = array_keys($lista1); #vai apresentar as chaves
    print_r($chave). "<br>";
    echo"<br>";
    echo"<br>";
    
    $chave = array_values($lista1);#vai aparesenta os valores das chaves
    print_r($chave). "<br>";
    echo"<br>";
    echo"<br>";


    #verificar se o valor existe no array usando metedo array_key_exists podemos usar um booleano

    if(key_exists("i", $lista1)){
        echo"O nome consta na lista <br>";
    }else{
        echo"O nome não consta na lista  <br> ";    
    }   

    echo"<br>";
    echo"<br>";


  

    # usando a função extract

      $lista = [
        "nome" => "Carlos", 
        "idade" => 15,
    ];
      #Função extract podemos criar variaveis de array associativos
      extract($lista);
      echo "$nome <br>";
      echo "$idade <br>";

      $lista = [
        "nome" => "Carlos", 
        "idade" => 29,
    ];
    echo"<br>";
    echo"<br>";

     extract($lista);
     echo "$nome <br>";
     echo "$idade <br>";
     echo"<br>";
     echo"<br>";


     #função array_reduce podemos ultilizar o array em apenas um valor podemos somar subtrair e multiplicar
     $valores = [1,3,4,5,6,4,8,9,10,1];

     function soma($a,$b){
        return $a+$b;

     }

     $resultado = array_reduce($valores,"soma");#passa variavel mais o nome da array em string
     echo "$resultado <br>";
     echo"<br>";
     echo"<br>";

     #função in_array se o que for solicitado esta no array retorna false ou true

     if(in_array(100,$valores)){
        echo"Encontrado ";
     }else{
        echo"Não Encontrado o numero ";

     }
     echo"<br>";
     echo"<br>";


     #unindo arrays e usando a funçao array_merge() quantas tabelas que forem necessárias
     $tab1 = [1,3,50,5,100,4,80,9,10,1];
     $tab2= [1,3,50,5,6,4,80,9,10,1];
     $tab3 = [1,3,50,5,6,5,80,9,10,1];
     $nomes=["Marcos","Bianca","Paulo"];

    
     $unindotabelas = array_merge($tab1,$tab2,$tab3,$nomes,[30,31]);

     print_r($unindotabelas);
     echo"<br>";
     echo"<br>";


      #Cacula a diferença de array usando a funçao array_diff interceção
      $tab1 = [1,2,3];
      $tab2 = [2,5,6];
      $dif = array_diff($tab1,$tab2);     
      print_r($dif);
      echo"<br>";
      echo"<br>";
      $dif = array_diff($tab2,$tab1);     
      print_r($dif);
 


     



















  

    










?>