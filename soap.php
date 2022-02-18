// SOAP com PHP
$client = new SoapClient("https://minhaurl.com.br?wsdl",
              array('cache_wsdl' => WSDL_CACHE_NONE,'trace' => true,"encoding" => "utf-8","features" => SOAP_SINGLE_ELEMENT_ARRAYS,"exceptions" => true));
       $param = array(
                       'versao'      => '3.0',
                       'cod_input'   => 'C',
                       'cartao'      => 'xxxxxxxxxxx', 
                       'proxy'       => 'x',
                       'usr'         => 'xxxxxx',
                       'pwd'         => 'jS1_Njg2b8b0WMbU' );

        //nome do método
       $resultado = $client->consulta_disponivel($param);
       echo "<pre>\n";
       print_r ($resultado);
       echo "</pre>\n";   
     //Aqui obtenho o retorno:

    stdClass Object
               (
               [return] => LUIZ ALBERTO43326200004787200000000
               )
        //Usando: 
        $result1 = ( $client->__getLastResponse());
         var_dump($result1 );
        //Obtenho:
               array(1) {
                   [0]=>
                   string(701) "<G_ServApp_Response><consulta_disponivel><nome>LUIZ ALBERTO</nome>                                      
                   <cartao>4332620000478720</cartao><proxy>0</proxy><limite_credito>0</limite_credito><disponivel_saques>0</disponivel_saques><disponivel_compras>0</disponivel_compras><saldo_atual>0</saldo_atual></consulta_disponivel><codigo_retorno>00</codigo_retorno></G_ServApp_Response>"
                  }
                  
                  
//Resultado tratado:
$result1 = ( $client->__getLastResponse());
         var_dump($result1 );
        //Obtenho:
               array(1) {
                   [0]=>
                   string(701) "<G_ServApp_Response><consulta_disponivel><nome>LUIZ ALBERTO</nome>                                      <cartao>4332620000478720</cartao><proxy>0</proxy><limite_credito>0</limite_credito><disponivel_saques>0</disponivel_saques><disponivel_compras>0</disponivel_compras><saldo_atual>0</saldo_atual></consulta_disponivel><codigo_retorno>00</codigo_retorno></G_ServApp_Response>"
                  }
                  
//Retorno:
$nome_arquivo = $result1;
       $arquivo = explode('nome', $nome_arquivo);
       print ("Portador" . $arquivo[1].'<br>');
       $arquivo = explode('cartao', $nome_arquivo);
       print ("Cartão" . $arquivo[1].'<br>');
       $arquivo = explode('proxy', $nome_arquivo);
       print ("Proxy" . $arquivo[1].'<br>');
       $arquivo = explode('limite_credito', $nome_arquivo);
       print ("Limite" . $arquivo[1].'<br>');
       $arquivo = explode('disponivel_saques', $nome_arquivo);
       print ("disponivel_saques" . $arquivo[1].'<br>');
       $arquivo = explode('disponivel_compras', $nome_arquivo);
       print ("disponivel_compras" . $arquivo[1].'<br>');
       $arquivo = explode('saldo_atual', $nome_arquivo);
       print ("saldo_atual" . $arquivo[1].'<br>');
       $arquivo = explode('codigo_retorno', $nome_arquivo);
       print ("codigo_retorno" . $arquivo[1].'<br>');
       
       
       Obtive as respostas:

Portador>LUIZ ALBERTO</

Cartão>4332620000478720</

Proxy>0</

Limite>0</

disponivel_saques>0</

disponivel_compras>0</

saldo_atual>0</

codigo_retorno>00</
