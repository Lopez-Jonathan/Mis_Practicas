const btnSwitch=document.querySelector("#switch");
const btnAbrir=document.querySelector("#abrir-menu")

btnSwitch.addEventListener('click' , () =>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});

btnAbrir.addEventListener('click' , () =>{
  document.querySelector('.nav-links-center').classList.toggle('mostrar');
});
