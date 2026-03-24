import { resaltaSiEstasEn } from "./lib/resaltaSiEstasEn.js"

export class NavTabFixed extends HTMLElement {

 constructor() {
  super()
  this.creado = false
 }

 connectedCallback() {
  this.classList.add("md-tab", "fixed")

  if (!this.creado) {

   this.innerHTML = /* HTML */`
    <a ${resaltaSiEstasEn(["/index.html", "", "/"])} href="index.html">
     <span class="material-symbols-outlined">home</span>
     Inicio
    </a>

    <a ${resaltaSiEstasEn(["/lista.html"])} href="lista.html">
    <span class="material-symbols-outlined">list</span>
    Lista Cliente
    </a>

    <a ${resaltaSiEstasEn(["/listaserver.html"])} href="listaserver.html">
    <span class="material-symbols-outlined">dns</span>
    Lista Servidor
    </a>
 
    <a ${resaltaSiEstasEn(["/ayuda.html"])} href="ayuda.html">
    <span class="material-symbols-outlined">help</span>
    Ayuda
    </a>`

    

   this.creado = true

  }

 }

}

customElements.define("nav-tab-fixed", NavTabFixed)