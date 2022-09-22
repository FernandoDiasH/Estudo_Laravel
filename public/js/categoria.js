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


