//const axios = require('axios').default;

const form = document.getElementById('formCategoria');
form.addEventListener('submit', async function(e){
    e.preventDefault();
    let categoria = document.getElementById('categorias').value;
    let token = document.getElementsByName('_token')[0].value;

    if(categoria == ''){
        alert("Preencha o campo")
    }else{

        const rest = await fetch('categoria/create', {
            method: 'post',
            headers: {
                'X-CSRF-TOKEN':token,
                'Content-Type': 'application/json'
            },
            body:JSON.stringify({
                'categorias': categoria,
                })
            });

        const result = await rest.json();
        alert(result.msg);
    }
})


const button = document.getElementById('teste')
button.addEventListener('click', async function(){
    const token = document.getElementsByName('_token')[0].value;

    let valor = {
        'nome': 'fernando',
        'idade': 15,
        'cidades': ['curitiba', 'sao paulo', 'rio de janeiro'],
        'bairros':{
            'regiao':[
                ['22333', '323'],
                ['dfsf', 'fds']
            ]

        }
    }

    let itens = [3, 4, 'fsf', 'fe']

    const rest = await fetch('teste', {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN':token,
            'Content-Type': 'application/json'
        },
        body:JSON.stringify(itens)
    })

    const result = await rest.text();
    console.log(result)

})

const pagina = document.getElementById("proximo")
pagina.addEventListener('click', async function(e){
    e.preventDefault()
    let url = window.location.href
    console.log(url)


    let pagina = 2

    //let result = await fetch('/categoria?page=2').then(res => res.text())

    //document.body.innerHTML =  result



})


