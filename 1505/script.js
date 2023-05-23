//alert("Olá, bem vindos ao E-commerce");

document.getElementById("fdemo").addEventListener("submit", function(event) {
    event.preventDefault();
    var nome = document.getElementById("nome").value;
    alert(nome);
  });
  