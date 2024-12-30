function Task() {
    this.form = document.querySelector('.form');
    this.tarefa = document.querySelector('.tarefa');
    this.show = document.querySelector('.show');
    this.sendBtn = document.querySelector('.btn')
    
    this.start = () => {
        this.saveTask()
        this.loadaTask()
        this.sendForm()
    }
    this.sendForm = () => {
        this.form.onsubmit = (e) => {
            e.preventDefault();
        }
    }
    
    this.saveTask = () => {
        this.sendBtn.onclick = () => {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '../api/salvar_tarefa.php', true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        this.tarefa.value = ''; // Limpa o campo
                    } else {
                        alert("Erro na requisição.");
                    }
                }
            };
            let formData = new FormData(this.form);
            xhr.send(formData);
        };
    }
    this.loadaTask = () => {
        setInterval(() => {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '../classes/GetLista.php', true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        let data = xhr.response;
                        this.show.innerHTML = data;
                    }
                }
            }
            xhr.setRequestHeader("Content-type",
                "application/x-www-form-urlencoded");
            xhr.send("tarefa=" + this.tarefa.value);
        }, 600);
    }

}

const task = new  Task();
task.start()




