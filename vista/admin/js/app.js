$(document).ready(function () {
    $('.sidebar-menu').tree()

   
    $('#registros').DataTable({ 
      'retrieve' : true,
      'paging'      : true,
      'pageLength' : 5,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language' : {
        paginate: {
          next: 'Siguiente',
          previous: 'Anterior',
          last: 'Ultimo',
          First: 'Primero'
        },
        info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        emptyTable: 'No hay registros',
        infoEmpty: '0 Registros',
        search: 'Buscar: '
      }
    });

    
 })

 
    $('#fecha').datepicker({
      autoclose: true
    });

    $('.seleccionar').select2();

    $('.timepicker').timepicker({
      showInputs: false
    });

    $('#icono').iconpicker();