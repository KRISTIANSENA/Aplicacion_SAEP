@extends('layouts.guest')
@section('content')
    
<div class="container">
        <div class="row">
            <div class="col s6 8 offset-s6">
                <br><br><br><br>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="col s6 offset-s3">
                            <img class="responsive-img" src="img/login.png">
                            </div>

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                            
                                

                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">perm_identity</i>
                                        <input id="email" type="email" name="email" class="validate" required>
                                        <label for="email">Correo electronico</label>
                                    </div>
                                <div class="input-field col s12">
                                        <i class="material-icons prefix">security</i>
                                        <input id="password" type="password" name="password" class="validate" required>
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                                <div class="col s12  center-align">
                                        <button type="submit" class="waves-effect waves-light btn darken-2">
                                        <i class="material-icons right">input</i> iniciar sesión 
                                        </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection