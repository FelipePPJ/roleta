<script>
  var validacao = true;

  function rodar_roleta() {
    if(validacao == true) { //impede multiplos cliques durante o sorteio
      validacao = false;
      var premios = {!!$premios!!}; //variáveis vindas do controlador
      var contar  = Object.keys(premios).length; //verifica tamanho de json
      var sortear = Math.floor(Math.random() * contar) //sorteia um dos campos do json aleatório

      document.getElementById("ponteiro").style.animation = "rotation 0.2s infinite linear"; //Inicia a aceleração do ponteiro

      //Recarrega imagem para zerar rotação
      setTimeout(function(){
        $("#ponteiro").remove();
        $("div").html("<img src='images/ponteiro.png' id='ponteiro' usemap='#clique'>")
        console.log('Premio: ' + premios[sortear]['nome'] + ' - ' + premios[sortear]['posicao'] + ' graus'); //registra no log, qual foi o prêmio e ângulo onde o ponteiro parou
      }, 1000);

      //Posiciona ponteiro no campo sorteado
      setTimeout(function(){
      document.getElementById('ponteiro').style.transform = "rotateZ("+premios[sortear]['posicao']+"deg)";
      }, 1000);

      //Delay para iniciar movimento do ponteiro novamente
      setTimeout(function(){
      document.getElementById("ponteiro").style.animation = "rotation 2s infinite linear";
      validacao = true;
      }, 3000);
    }
  }
</script>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
