@extends ('layouts.plantilla')

@section('contenido')
<br></br>
<center>
    <h1>Formulario De Registro De Cultivos Rentables</h1>
    <div class="card" style="width: 50rem">
        <div class="card-body">
            <p class="card-text">
            <form action="{{route('cultivos.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Fecha Registro: </label><br>
                    <input type="date" class="form-control" style="width: 60%" id="fecha" name="fecha"
                    required><br>
                    <label for="">Nombre Cultivo: </label><br>
                    <input type="text" class="form-control" style="width: 60%" id="nombre" name="nombre"
                    required><br>
                    <label for="">Tipo Cultivo: </label><br>
                    <input type="text" class="form-control" style="width: 60%" id="tipo" name="tipo"
                    required><br>
                    <label for="">Area Cultivada: </label><br>
                    <input type="number" class="form-control" style="width: 60%" id="area" name="area"
                    required><br>
                    <label for="">Presupuesto :</label><br>
                    <input type="number" class="form-control" style="width: 60%" id="presupuesto" name="presupuesto"
                    required><br>
                    <br>
                    <input type="submit" class="btn btn-success" value="Agregar">
            </form>
        </p>
        </div>
    </div>
</center>
@endsection