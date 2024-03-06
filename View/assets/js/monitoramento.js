const openModalButton = document.querySelector("#cartoes");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
    modal.classList.toggle("hide");
    fade.classList.toggle("hide");
};

let listaRamais

function loadData(){
    $.ajax({
        url: "http://localhost/programador_junior-master/Dashboard/loadData",
        type: "GET",
        dataType: 'json',
        success: function(data){ 
            listaRamais = data 
            $('#cartoes').empty();
            data.forEach(function(item, indice) {
                let statusRamal = item.status;
                $('#cartoes').append(`<div onclick="showDetail(${indice})" 
                class="cartao${capitalizeFirstLetter(statusRamal)}">
                                    <div class="ramal"> <i class="fa-solid fa-phone fa-xs" style="color: #232323;"></i> ${item.username}</div>
                                    <span class="${statusRamal} icone-posicao"></span>
                                    <div class="userName"> <i class="fa-solid fa-user fa-sm" style="color: #232323;"></i> ${item.name} </div>
                                  </div>`);
            });
        },
        error: function(){
            console.log("Errouu!")
        }
    });
}

function showDetail(indice) {
    const modal = document.querySelector("#modal");
    modal.innerHTML = "";

    const modalHeader = document.createElement("div");
    modalHeader.classList.add("modal-header");

    const h2 = document.createElement("h2");
    h2.textContent = listaRamais[indice].name;
    modalHeader.appendChild(h2);

    const closeButton = document.createElement("button");
    closeButton.textContent = "Fechar";
    closeButton.id = "close-modal";
    closeButton.addEventListener("click", toggleModal);
    modalHeader.appendChild(closeButton);

    modal.appendChild(modalHeader);

    const modalBody = document.createElement("div");
    modalBody.classList.add("modal-body");

    const ramalParagraph = document.createElement("p");
    ramalParagraph.textContent = "Ramal: " + listaRamais[indice].username;
    modalBody.appendChild(ramalParagraph);

    const statusParagraph = document.createElement("p");
    statusParagraph.textContent = "Status: " + listaRamais[indice].status;
    modalBody.appendChild(statusParagraph);

    const portParagraph = document.createElement("p");
    portParagraph.textContent = "Porta: " + listaRamais[indice].port;
    modalBody.appendChild(portParagraph);

    modal.appendChild(modalBody);

    toggleModal();
}

function capitalizeFirstLetter(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

loadData();
setInterval(loadData, 10000);