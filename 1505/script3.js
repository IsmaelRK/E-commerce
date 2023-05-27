var nomeInp = document.getElementById("name");
var write = document.getElementById("singUpH1");


nomeInp.addEventListener('input', function() {
  var value = nomeInp.value;  
  write.textContent = "Cadastre-se, " + value;
});