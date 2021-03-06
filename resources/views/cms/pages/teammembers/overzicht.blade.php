@extends('cms.master')

@section('title')
    Teammembers
@stop

@section('content')
    <h1> Teammembers overzicht </h1>
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
                                            <table class="table table-hover">
                                                <tr> 
                                                {!! $data['teammembers']->render() !!}
                                                </tr>
                                                <thead>
                                                    <tr>
                                                        <th>#<span class='ion-arrow-down-b table-head'></span></th>
                                                        <th>Voornaam</th>
                                                        <th>Achternaam</th>
                                                        <th>Beschrijving</th>
                                                        <th>Functie</th>
                                                        <th>Aanpassen</th>
                                                        <th>Verwijderen</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data['teammembers'] as $object)
                                                        <tr>
                                                            <td>{{ $object->id }}</td>
                                                            <td>{{ $object->first_name }}</td>
                                                            <td>{{ $object->last_name }}</td>
                                                            <td>{{ $object->description }}</td>
                                                            <td>{{ $object->role }}</td>
                                                            <td>
                                                                 {!! Form::open(
                                                                    array(
                                                                        'method' => 'GET',
                                                                        'action' => ['TeamMembersController@edit', $object->id]
                                                                        )
                                                                    )
                                                                !!}

                                                                <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                                {!! Form::close() !!}
                                                            </td>
                                                            <!-- Verwijderen form -->
                                                            <td>
                                                                 {!! Form::open(
                                                                    array(
                                                                        'method' => 'DELETE',
                                                                        'action' => ['TeamMembersController@destroy', $object->id]
                                                                        )
                                                                    )
                                                                !!}

                                                                <input type='submit' class='btn btn-danger' value='verwijderen' />
                                                                {!! Form::close() !!}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
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
