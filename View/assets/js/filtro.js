const filterElement = document.querySelector('#filter')
const ramais = document.querySelector('#cartoes')
filterElement.addEventListener('input', filterRamais)

function filterRamais(){
    if(filterElement.value != ""){
        for(let ramal of ramais.childNodes){
            let user = ramal.querySelector('.userName').textContent.toLowerCase()
            let ramalUser = ramal.querySelector('.ramal').textContent
            let filterText = filterElement.value.toLowerCase()
            console.log(ramalUser)
            if(!user.includes(filterText) && !ramalUser.includes(filterText))
                ramal.style.display = "none"
            else 
                ramal.style.display = "block"
        }
    } else {
        for(let ramal of ramais.childNodes){
            ramal.style.display = "block"
        }
    }
}