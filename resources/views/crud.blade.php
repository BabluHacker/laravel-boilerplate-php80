@extends('layouts.dashboard')

@section('content')
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"></div>
                    
                    <div class="card-body">
                        CRUD: {{$tableName}} table
                        <br>
                        <br>
                        
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    
                                    
                                    
                                    
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">email</th>
                                                <th scope="col">view</th>
                                                <th scope="col">edit</th>
                                                <th scope="col">delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @for ($i=0; $i < 10; $i++)
                                                <tr>
                                                    <th scope="row">{{$i}}</th>
                                                    <td>user{{$i}}@user.com</td>
                                                    <td>    <button type="button" class="btn btn-primary" name="button">View</button></td>
                                                    <td><button type="button" class="btn btn-info" name="button">Edit</button></td>
                                                    <td><button type="button" class="btn btn-danger" name="button">Delete</button></td>
                                                </tr>
                                            @endfor
                                            
                                        </tbody>
                                    </table>
                                    
                                    
                                    
                                    
                                    
                                </div>
                                <div class="col-12">
                                    
                                    SUBSCRIPTIONS
                                    
                                    <button type="button" class="btn btn-primary" name="button">View</button>
                                    <button type="button" class="btn btn-info" name="button">Edit</button>
                                    <button type="button" class="btn btn-danger" name="button">Delete</button>
                                    
                                </div>
                                
                                
                                
                                
                                
                                
                            </div>
                            
                            
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
