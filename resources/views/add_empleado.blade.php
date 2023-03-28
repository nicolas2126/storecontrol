@extends('base')

@section('content')
    <!-- contenido de la página de inicio aquí -->
    <div class="container">
        <h1 class="text-center" style="margin-top: 40px;">Agregar Producto</h1>
        <div class="form-container">
            <form action="/add_empleado" method="POST">
            <div class="col-md-6 mx-auto text-center" style="margin-top: 40px;">
                <div class="mb-3 row">
                    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputApPaterno" class="col-sm-2 col-form-label">Apellido Paterno</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="ap_paterno" placeholder="Apellido paterno" style="margin-top: 10px;">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputApMaterno" class="col-sm-2 col-form-label">Apellido Materno</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="ap_materno" placeholder="Apellido materno" style="margin-top: 10px;">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="Correo electrónico">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3 row">
                        <label for="tipo_empleado" class="col-sm-2 col-form-label">Tipo de empleado</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="tipo_empleado" name="tipo_empleado" style="margin-top: 10px;">
                                <option value="Administrador">Administrador</option>
                                <option value="Bodeguero">Bodeguero</option>
                                <option value="Empleado">Empleado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger my-btn-class" style="margin-top: 10px;">Guardar</button>
            </form>
        </div>
@endsection