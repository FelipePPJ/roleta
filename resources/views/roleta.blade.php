<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @section('title', 'Avaliação')
      @section('description', 'Crie uma roleta de descontos e disponibilize o link do repositório do github abaixo, Você deverá ultilizar laravel ou lumen com docker e vue.js.')
      @include('base.header')
    </head>
    <body>
      <img src="images/roleta.png">
      <div><img src="images/ponteiro.png" id="ponteiro" usemap="#clique"></div>

      <!-- Image Map -->
      <map name="clique">
          <area onclick="rodar_roleta()" coords="502,503,160" shape="circle">
      </map>

      @include('base.footer')
    </body>
</html>
