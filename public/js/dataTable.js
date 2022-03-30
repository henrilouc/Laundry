$(document).ready(function() {
    $('#dataTable').DataTable({
        "language": {
            "lengthMenu": " Mostrar _MENU_ por página",
            "zeroRecords": "Sem registros",
            "info": "Página _PAGE_ de _PAGES_",
            "infoEmpty": "Registro não encontrado",
            "infoFiltered": "(foram filtrados _MAX_ registros)",
            "sSearch":"Buscar"
        }
    });
})
