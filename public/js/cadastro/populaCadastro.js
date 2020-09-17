
var csrfVar = $('meta[name="csrf-token"]').attr('content')

function _formataDatatable(idTabela){
    $('#' + idTabela).DataTable({
        "order": [[ 1, "asc" ]],
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "Mostrar _MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
};

$(document).ready(function(){
    $.getJSON('cadastra-empregado/lista-cadastro', function(dados){
        $.each(dados, function(key, item) {          
            var linha = 
                `<tr>
                    <td style="color: black;">${item.matricula}</td>
                    <td style="color: black; white-space:nowrap;">${item.name}</td>
                    <td style="color: black; white-space:nowrap;">${item.coordenacao}</td>
                    <td style="color: black;">${item.unidade}</td>
                    <td white-space:nowrap;">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ação
                        </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item"  type="button" data-toggle="modal" data-target="#modalEditar${item.id}"><i class="fas fa-edit"></i>&nbsp Editar</a>
                                <a class="dropdown-item"  type="button" data-toggle="modal" data-target="#cancelarContrato${item.id}"><i class="fas fa-times"></i>&nbsp&nbsp Excluir</a>
                            </div>
                    </div>

                        <!-- Modal editar -->
                        <div class="modal fade" id="modalEditar${item.id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div style="background: linear-gradient(to right, #4F94CD , #63B8FF);"class="modal-header">
                                <h5 style="color: white;" class="modal-title" id="exampleModalLabel">Editar ${item.matricula}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="cadastra-empregado/editar-cadastro/${item.id}" method="POST">
                            <input type="hidden" name="_token" value="${csrfVar}">
                                <div class="modal-body" style="background-color: #b5adad;">
                                    <div class="form-group">
                                        <label for="inputMatricula${item.id}">Matrícula</label>
                                        <input type="text" class="form-control" id="inputMatricula${item.id}" name="cadastraMatricula" value="${item.matricula}" MAXLENGTH=7 minlength="7" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNome${item.id}">Nome</label>
                                        <input type="text" class="form-control" id="inputNome${item.id}" name="cadastraNome"  value="${item.name}" MAXLENGTH=100 required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCoordenacao${item.id}">Coordenação</label>
                                        <input type="text" class="form-control" id="inputCoordenacao${item.id}" name="cadastraCoordenacao" value="${item.coordenacao}" MAXLENGTH=100 required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUnidade${item.id}">Unidade</label>
                                        <input type="text" class="form-control" id="inputUnidade${item.id}" name="cadastraUnidade" value="${item.unidade}" MAXLENGTH=4 minlength="4" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                            </div>
                          </div>
                        </div>

                        <!-- Modal Deletar -->
                        <div class="modal fade" id="cancelarContrato${item.id}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div style="background: linear-gradient(to right, #cc0000 0%, #ff6699 100%);" class="modal-header">
                                    <h5 style="color: white;" class="modal-title" id="exampleModalLabel">Deletar - ${item.matricula} </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="cadastra-empregado/excluir-cadastro/${item.id}" method="POST">
                                <input type="hidden" name="_token" value="${csrfVar}">
                                    <div class="modal-body">
                                        <p style="color: black;"><i class="fas fa-exclamation-triangle"></i> Atenção</p>
                                        <p style="color: black;">Tem certeza que deseja deletar: <br>
                                        <b>${item.name} - ${item.matricula}</b></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;
            $(linha).appendTo('#tblEmpregados>tbody'); 
        })
    }).done(function() {
        _formataDatatable("tblEmpregados")
      })
});
