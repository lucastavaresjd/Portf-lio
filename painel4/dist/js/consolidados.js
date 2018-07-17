

chamadaAjax('php/selectsJson.php?parametro=paciente_do_dia', alterarQtdPaciente);
chamadaAjax('php/selectsJson.php?parametro=procedimento_do_dia', alterarQtdProcedimentos);


//cards com dados totais
function alterarQtdPaciente(data, id_da_alteracao) {
    var id = pergarId("con_agendados");
    id.innerHTML = data[0].totaldePacientes;
}

function alterarQtdProcedimentos(data, id_da_alteracao) {
    var id = pergarId("con_procedimento");
    id.innerHTML = data[0].total_procedimento;
}


function pergarId(id_da_alteracao) {
    var id = document.getElementById(id_da_alteracao);
    return id;
}


//cards por setor

chamadaAjax('php/selectsJson.php?parametro=lista_de_setores', setores);

function setores(data) {
    var local_do_card = document.getElementById('con_card_setores');
    var html = " ";


    for (i = 0; i < data.length; i++) {

        html += " <div class='col s12 l4' >"
            + "<div class='cards z-depth-3'>"
            + `<div class='col s4  l3 imagem-img${data[i].id}'></div>`
            + "<div class='col s8 l9 c_conteudo_card'>"
            + "<h1 class='c_titulo c_card-title'>" + data[i].setor + "</h1>"
            + "<p>Paciente:"
            + "<b class='right'>8</b>"
            + "</p>"
            + "<p>Medicos:"
            + "<b class='right'>2</b>"
            + "</p>"
            + "<p>Colaboradores:"
            + "<b class='right'>3</b>"
            + "</p>"
            + "<p>Equipamentos:"
            + "<b class='right'>2</b>"
            + "</p>"
            + "<b class='c_status'>Status: Operacional</b>"
            + "</div>"
            + "</div>"
            + "</div>";

        }
        local_do_card.innerHTML = html;
}
