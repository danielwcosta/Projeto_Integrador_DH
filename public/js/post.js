
// ===============SCROOLLAR PARA BAIXO=========================

let scrollbarBottom = document.querySelector('#scrollbarBottom');

scrollbarBottom.scrollTop = scrollbarBottom.scrollHeight;

let textArea = document.querySelector('#textArea')

function validar(){
  if (textArea.value =="" || textArea.value.length === 0 || !textArea.value.trim()){
    textArea.focus();
    return false;
  }
}
// ========== AJAX - POSTAR SEM RELOAD===========

// let ulMensagens= document.querySelector('#aFazer');
// let formulario = document.querySelector('#formulario');
//
// const listarMensagens = (elementoHtml) => {
//     fetch('http://localhost:8000//listar-tarefa/3')
//     .then(resposta => resposta.json())
//     .then(dados =>{
//         let html = ''
//
//         dados.forEach(dado =>{
//             html += `
//                   <li class="left clearfix">
//                     <div class="pull-left">
//
//                     </div>
//                     <div class="chat-body clearfix dentrochat">
//
//                         <div class="header">
//
//                             <small class=" text-muted pull-right"><span
//                                     class="glyphicon glyphicon-time"></span>${dado.data_hora}</small>
//
//
//                         </div>
//
//                         <p texto-chat2>${dado.description}</p>
//                     </div>
//                 </li>
//             `
//         })
//         elementoHtml.innerHTML = html
//     })
// }
//
// const adicionaTarefa = (mensagem) => {
// 	let dados = new FormData()
//   dados.append('description',mensagem)
//
// 	fetch('http://localhost:8000/nova-tarefa', {
// 	method: 'post',
// 	body: dados
// }).then(resposta => resposta.json()).then(dados => console.log(dados))
// }
//
// const adicionarEventoConcluir = () => {
//     let botoesConcluir = document.querySelectorAll('#ConcluirTarefa')
//
//     botoesConcluir.forEach(botaoConcluir => {
//         botaoConcluir.onclick = (evento) => {
//             evento.preventDefault()
//
//             fetch(`http://localhost:8000/api/atualizar-tarefa/${botaoConcluir.getAttribute('tarefa-id')}`,{
//                 method: 'put' // é um metodo em q atualiza no um dado do banco
//             })
//             .then(resposta => resposta.json())
//             .then(dados => {
//                 if(dados.status == 'feito'){
//                     botaoConcluir.parentElement.previousElementSibling.style.textDecoration = 'line-through'
//                 } else {
//                     botaoConcluir.parentElement.previousElementSibling.style.textDecoration = 'none'
//
//                 }
//             })
//         }
//     })
// }
//
// const adicionarEventoDeletar = () => {
//     let botoesDeletar = document.querySelectorAll('#deletarTarefa')
//
//     botoesDeletar.forEach(botaoDeletar => {
//         botaoDeletar.onclick = (evento) => {
//             evento.preventDefault()
//
//             let respostaUsuario = confirm('Quer deletar essa tarefa?')
//
//             if(respostaUsuario)
//             fetch(`http://localhost:8000/api/deletar-tarefa/${botaoDeletar.getAttribute('tarefa-id')}`,{
//                 method: 'delete' // é um metodo em q atualiza no um dado do banco
//             })
//             .then(resposta => resposta.json())
//             .then(dados => {
//
//                 if(dados){
//                     botaoDeletar.parentElement.parentElement.classList.remove('d-flex')
//                     botaoDeletar.parentElement.parentElement.classList.add('d-none')
//
//                 }
//             })
//         }
//     })
// }
//
// formulario.onsubmit = (evento) => {
//     evento.preventDefault()
//
//     adicionaTarefa(textArea.value)
//
//     textArea.value = ''
//     textArea.focus()
//
//     listarMensagens(ulMensagens)
// }
//
// listarMensagens(ulMensagens)
