@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro de Usuario</div>

                <div class="card-body">
                    <form>
                        <div class="form-row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Apellido Paterno">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Apellido Materno">
                          </div>
                        </div>
                        <br>
                        <div class="form-row btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Sexo</label>
                                </div>
                                    <select class="custom-select" id="inputGroupSelect01">                                        
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                      </select>
                            </div>                            
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Telefono">
                            </div>
                            <div class="col">
                              <input type="text" class="form-control" placeholder="Correo Electronico">
                            </div>
                          </div>
                          <br>
                          
                      </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection