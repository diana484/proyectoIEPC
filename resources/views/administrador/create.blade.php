@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
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
                          
                          <div class="form-row btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="input-group">
                              <div class="form-group">
                                <label for="country">Select Country:</label>
                                <select name="country" class="form-control" style="width:250px">
                                    <option value="">--- Select Country ---</option>
                                    @foreach ($countries as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                  <label for="state">Select State:</label>
                                  <select name="states" class="form-control"style="width:250px">
                                  <option>--State--</option>
                                  </select>
                              </div> 
                            </div> 

                            <script type="text/javascript">
                              jQuery(document).ready(function ()
                              {
                                      jQuery('select[name="country"]').on('change',function(){
                                         var countryID = jQuery(this).val();
                                         if(countryID)
                                         {
                                            jQuery.ajax({
                                               url : 'create/towns/'+countryID,
                                               type : 'GET',
                                               dataType : 'json',
                                               success:function(data)
                                               {
                                                  console.log(data);
                                                  jQuery('select[name="states"]').empty();
                                                  jQuery.each(data, function(key,value){
                                                     $('select[name="states"]').append('<option value="'+ key +'">'+ value +'</option>');
                                                  });
                                               }
                                            });
                                         }
                                         else
                                         {
                                            $('select[name="states"]').empty();
                                         }
                                      });
                              });
                              </script>
                             

                              
                          </div>
                           
                          

                      </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection