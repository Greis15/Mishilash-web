const imagenes = document.querySelectorAll('.gallery__img')
let imagenesLight = document.querySelector('.agregar-imagen')
let contenedorLight = document.querySelector('.imagen-light')
let hamburguer1 = document.getElementById('hamburguer')


imagenes.forEach (imagen => {
    imagen.addEventListener('click', ()=> {
        aparecerImagen(imagen.getAttribute('src'))
        
    })
})
contenedorLight.addEventListener('click', (e)=>{
    if(e.target !== imagenesLight){
        contenedorLight.classList.toggle('show')
        imagenesLight.classList.toggle('showImage')
    }
})

let aparecerImagen = (imagen) => {
    imagenesLight.src = imagen;
    contenedorLight.classList.toggle('show')
    imagenesLight.classList.toggle('showImage')
    // hamburguer1.style.opacity = '0'
}