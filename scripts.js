$(document).ready(function() {

    //se declara el datatable para mostrar los datos
    var table = $('#EldenRingWeapons').DataTable({
        "ajax": {
            "url": "http://localhost/ejercicio/get.php", //se manda a llamar al archivo del metodo que muestra los datos en el datatable
            "dataSrc": ""
        },
        //aqui se muestran los datos 
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "type" },
            { "data": "ash_of_war" },
            { "data": "attack_points" },
            { "data": "fp_cost" },
            //apartir de aqui es una funcion donde se agrega una columna que en lugar de tener una "Data" agregga botones de "Upload" y "Eliminate"
            {
                "data": null,
                "render": function(data, type, row) {
                    return `
                        <button class="btn btn-warning btn-sm btn-action edit-btn" data-bs-toggle="modal" data-bs-target="#modalEdit" data-id="${row.id}">
                            <i class="fas fa-pencil-alt"></i> 
                        </button>
                        <button class="btn btn-danger btn-sm btn-action delete-btn" data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="${row.id}">
                            <i class="fas fa-trash"></i>
                        </button>
                    `;
                },
                //funciones de la datatable que no se usan se ocultan
                "orderable": false,
                "searchable": false,  
            }
        ],
        //se agrega el boton de "Add weapon"
        "dom": '<"d-flex justify-content-end dataTables_wrapper" <"dataTables_filter d-flex" Bf>>rtip',
        "buttons": [
            {
                text: '<i class="fas fa-plus"></i>',
                className: 'btn btn-primary btn-sm btn-action',
                attr: {
                    "data-bs-toggle": "modal",
                    "data-bs-target": "#modalAdd"
                }
            }
        ],
        "paging": false,  
        "info": false
    });
    //funcion para al dar clic en Upload muestre los datos a actualizar en el formulario
    $('#EldenRingWeapons').on('click', '.edit-btn', function() {
        // Obtener los datos de la fila seleccionada
        var row = table.row($(this).closest('tr')).data();

        // Llenar el formulario de "Upload weapon" con los datos del datatable
        $('#modalEdit #id').val(row.id);
        $('#modalEdit #name').val(row.name);
        $('#modalEdit #type').val(row.type);
        $('#modalEdit #ash_of_war').val(row.ash_of_war);
        $('#modalEdit #attack_points').val(row.attack_points);
        $('#modalEdit #fp_cost').val(row.fp_cost);
    });


    //se hace lo mismo que el "Upload" pero ahora para "Delete"
    $('#EldenRingWeapons').on('click', '.delete-btn', function() {
        var row = table.row($(this).closest('tr')).data();

        $('#modalDelete #id').val(row.id);
    });

});
