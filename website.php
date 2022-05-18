<?php
class elementoSites {
  // Head padrão dos sites
  function default_htmlHead($tituloPagina = 'Document'){
      $html_head = '<!DOCTYPE html>
               <html lang="pt-BR">
               <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$tituloPagina.'</title> 
                ';
    return $html_head;
  }
  
  public function setFavicon($href = ''){
    echo $favIcon = '<link rel="shortcut icon" href="'.$href.'" type="image/x-icon">';
  }
  
  public $qDadosCss = array();
  
  public function insert_cssHead($qDadosCss){
    $listaCss = array();
    array_push($listaCss,$qDadosCss);

    foreach($listaCss as $css){
      echo implode("",$css);      
    }
  }  

  public $qDadosScript = array();
  
  public function insert_scriptHead($qDadosScript){
    $listaScript = array();
    array_push($listaScript,$qDadosScript);

    foreach($listaScript as $script){
      echo implode("",$script);      
    }
  }
  
  public function createForm($action = '?', $method = 'POST'){
    $html_form = '<div class="website-form-content-form">
                    <form class="website-form" action="'.$action.'" method="'.$method.'">
                      <!-- v CAMPO PARA VALIDAÇÃO DE INFORMAÇÕES v -->
                      <input class="website-form-input-hidden" id="website-validacao" type="hidden" name="website-validacao" value="true">
                      <!-- ^ CAMPO PARA VALIDAÇÃO DE INFORMAÇÕES ^ -->
                      <label class="website-form-input-nome" for="nome">Nome Completo:</label>
                      <input class="website-form-input-nome" id="website-nome" name="website-nome" type="text" placeholder="João Inácio Gonçalves Dias" required>
                      <br><br>
                      <label class="website-form-label-email" for="email">Email:</label>
                      <input class="website-form-input-email" id="website-email" name="website-email" type="email" placeholder="joaoigDias@gmail.com" required>
                      <br><br>
                      <label class="website-form-label-password" for="password">Senha:</label>
                      <input class="website-form-input-password" id="website-password" name="website-password" type="password" placeholder="******" required>
                      <br><br>
                      <label class="website-form-label-date" for="date">Data de Nascimento:</label>                      
                      <input class="website-form-input-date" type="date" name="date" id="date" required>
                      <br><br>
                      <select class="webiste-form-selection" name="webiste-form-selection" id="webiste-form-selection" required>
                        <option class="webiste-form-option" value="0">1º</option>
                        <option class="webiste-form-option" value="1">2º</option>
                        <option class="webiste-form-option" value="2">3º</option>
                      </select>
                      <br><br>
                      <label class="website-form-label-comida" for="comida">Comida Favorita:</label>
                      <br>
                      <input class="website-form-input-checkbx-comida" type="checkbox">
                      <label class="website-form-label-checkbox-comida" for="comida">Lasanha</label>
                      <br>
                      <input class="website-form-input-checkbx-comida" type="checkbox">
                      <label class="website-form-label-checkbox-comida" for="comida">Pastel</label>
                      <br>
                      <input class="website-form-input-checkbx-comida" type="checkbox">
                      <label class="website-form-label-checkbox-comida" for="comida">Pizza</label>
                      <br>
                      <input class="website-form-input-checkbx-comida" type="checkbox">
                      <label class="website-form-label-checkbox-comida" for="comida">Sorvete</label>
                      
                      <br><br>
                      
                      <input class="website-form-input-submit" id="website-submit" name="website-submit" type="submit" value="Enviar">
                    </form>
                  </div>';
    echo $html_form;
  }
}

?>