const btnAbrir=document.querySelector("#switch");
btnAbrir.addEventListener('click' , () =>{
  document.querySelector('#menu-desplegable').classList.toggle('menu-desplegable-abierto');
  document.body.classList.toggle('blur');
  document.querySelector('.abrir-menu').classList.toggle('menu-cruz');
});
