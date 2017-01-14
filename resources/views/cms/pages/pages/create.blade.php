@extends('cms.master')

@section('title')
    Mentor toevoegen    
@stop

@section('content')
    <h1>Mentor toevoegen </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
           
            
            <hr>
            <div class="row">
                    
                    <div class="col-md-12">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                       
                                        <div class="table-responsive">
                                            {!! Form::open(['method' => 'POST', 'action' => 'PagesController@store' ]) !!}
                                                
                                                <table class="table table-hover">
                                                    <tbody>
                                                    
                                                        <tr>
                                                           <td>
                                                                {!! Form::label('name', ' De naam van de pagina ') !!} 
                                                                {!! Form::text('name', null, ['class' => 'form-control']); !!} 
                                                           </td>
                                                        </tr>
                                                     
                                                        

                                                        <tr>
                                                            <td>
                                                                <input type="submit" value="opslaan" class="btn btn-primary" name="opslaan">   
                                                            </td>
                                                        </tr> 

                                                    </tbody>
                                                </table>
                                            {!! Form::close() !!}
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
        </div>
    </div>
@stop
