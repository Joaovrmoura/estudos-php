const form = document.querySelector('.form');
const tarefa = document.querySelector('.tarefa');
const show = document.querySelector('.show');


form.onsubmit = e => {
    e.preventDefault(); // Previne o envio padrão do formulário
    
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '../api/salvar_tarefa.php', true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                    tarefa.value = ''; // Limpa o campo
            } else {
                alert("Erro na requisição.");
            }
        }
    };
    let formData = new FormData(form);
    xhr.send(formData);
};



setInterval(e => {
  let xhr = new  XMLHttpRequest();
  xhr.open('POST', '../classes/GetLista.php', true);
  xhr.onload = () =>{
    if(xhr.readyState == xhr.DONE){
      if(xhr.status === 200){
       
      }else{
        console.log('erro de requisição');
        xhr.setRequestHeader("Content-type", 
        "application/x-www-form-urlencoded");
      }
    }
  }
}, 500);
