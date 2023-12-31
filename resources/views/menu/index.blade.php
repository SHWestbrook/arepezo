<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Datatables with Relationship Tutorial - Tutsmake.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <style type="text/css">
        .paginate_button {
            padding: 0px !important;
        }
    </style>
</head>
<body>
<div class="container" style="margin-top: 100px;margin-bottom: 100px; ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">Laravel Datatables with Relationship Tutorial -
                    Tutsmake.com
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-sm-6">
                            <label for="tipoAlimento">Tipo Alimento:</label>
                            <select id="tipoAlimento" class="form-control">
                                <option value="">Selecciona...</option>
                                @foreach ($tipoAlimentos as $tipoAlimento)
                                    <option value="{{ $tipoAlimento->id }}">{{ $tipoAlimento->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="categoria">Categoria:</label>
                            <select id="categoria" class="form-control">
                                <option value="">Selecciona...</option>
                                @foreach ($categoriaMenus as $categoriaMenu)
                                    <option value="{{ $categoriaMenu->id }}">{{ $categoriaMenu->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="aplicarFiltros">Aplicar Filtros</button>
                        </div>
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Categoria Menu</th>
                            <th>Tipo Alimento</th>
                            <th>Precio Venta</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        const table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{route('menus.datatable')}}",
                type: 'GET',
                data: function (d) {
                    d.tipoAlimento = $('#tipoAlimento').val();
                    d.categoria = $('#categoria').val();
                }
            },
            columns: [
                {data: 'nombre', name: 'nombre'},
                {data: 'descripcion', name: 'descripcion'},
                {data: 'categoria', name: 'categoria_menu'},
                {data: 'tipo_alimento', name: 'tipo_alimento'},
                {data: 'precioVenta', name: 'precioVenta'},
            ]
        });
        $('#aplicarFiltros').click(function (){
            table.draw();
        })
    });

</script>
</body>
</html>
