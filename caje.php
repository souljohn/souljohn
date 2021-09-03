<?php

 class Cajero_electronico {
     public $clave= $_GET['clave'];
     public $usuario=$_GET['usuario'];
     public $saldo;
     public $valor_aretirar;
     public $clave_leida;
     public $opcion;
     public $cantidiadAtranferir;
     public $cuentaAtransferir;

 public function iniciart($clave,$saldo,$valor_aretirar,$opcion,$clave_leida,$cantidadAtransferir,$cuentaAtransferir) {
 $this-> clave= $clave=123;
 $this-> saldo = $saldo=1000000;
 $this-> valor_aretirar = $valor_aretirar;
 $this-> clave_leida = $clave_leida;
 $this-> opcion = $opcion=0;
 $this-> cantidadAtransferir = $cantidadAtransferir=0;
 $this-> cuentaAtransferir = $cuentaAtransferir;


           switch ($opcion) {
               case 1:
                  echo("Por favor ingres la cantidad a retirar");
                //  $valor_aretirar = lector.nextInt();
                  if ($valor_aretirar <= $saldo ) {
                      $saldo = $saldo - $valor_aretirar;
                     echo("Su nuevo saldo es: " + $saldo);
                  } else {
                      echo("Fondos Insuficientes, su saldo es: " + $saldo);
                  }
                  break;
               case 2:
                  echo(" Por favor ingrese su nueva clave");
                  //$clave = lector.nextInt();
                  echo(" Su clave ha sido modificada con exito");
                  break;
               case 3:
                  echo("Por favor ingrese la cantidad a tranferir");
                  //$cantidadAtransferir = lector.nextInt();
                  if ($cantidadAtransferir <= $saldo) {
                        echo("Por favor ingrese el numero de cuenta donde va a transferir el dinero");
                       //$cuentaAtransferir = lector.nextInt();
                       $saldo = $saldo - $cantidadAtransferir;
                       echo("Transferencia satisfactoria por valor de : " + $cantidadAtransferir);
                       echo("Su nuevo saldo es: " + $saldo);
                    }
                  break;
               case 4:
                  echo("No tiene movimeintos en la ultima semana");
                  break;
               case 5:
                  echo("Su saldo Actual es: " + $saldo);
                  break;
               case 6:
                  echo("Gracias por usar nuestro cajero...");
                  
                  //System.exit(0);
                  break;
                                 
               }  
            }
         }
?>
