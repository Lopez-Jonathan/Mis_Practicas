alert("¿Esta dispuesto a ver el mejor sitio de recetas?");
const btnSwitch=document.querySelector("#switch");
const btnAbrir=document.querySelector("#abrir-menu");
const btnInformacion=document.querySelector("#boton-footer")

btnSwitch.addEventListener('click' , () =>{
    document.body.classList.toggle('dark');
    btnSwitch.classList.toggle('active');
});

btnAbrir.addEventListener('click' , () =>{
  document.querySelector('.nav-links-center').classList.toggle('mostrar');
});

btnInformacion.addEventListener('click', ()=>{
  swal.fire({
    html: '<h1>Informacion Del Autor</h1> <p>Nombre:Jonathan Lopez</p> <p>Mail: Jonathan_Nahuel_Lop@hotmail.com</p> <p>Facebook<i class="fab fa-facebook"></i>:https://www.facebook.com/jony.lopez.3597/</p> <p>Instagram<i class="fab fa-instagram"></i>:https://www.instagram.com/jona_nahu/</p> <p>Whatsapp<i class="fab fa-whatsapp"></i>:+54 1165105251</p>'
  })
})
