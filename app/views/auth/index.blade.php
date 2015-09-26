@extends('layouts.auth')
@section('content')
     <form class="panel" name="form-login"  method="post" action="{{URL::route('signin')}}">
                            <div class="panel-body">
                                <!-- Alert message -->
                                <div class="alert alert-warning">
                                    <span class="semibold">Note :</span>&nbsp;&nbsp;Veuillez saisir vous cordonnées.
                                </div>
                                <!--/ Alert message -->
 <br><br>

                                <div class="form-group">
                                    <div class="form-stack has-icon pull-left">
                                        <input name="login" type="text" class="form-control input-lg" placeholder="Identifiant" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your username / email" data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                     <br><br>
                                    <div class="form-stack has-icon pull-left">
                                        <input name="password" type="password" class="form-control input-lg" placeholder="Mot de passe" data-parsley-errors-container="#error-container" data-parsley-error-message="Please fill in your password" data-parsley-required>
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>
 <br><br>
                                <!-- Error container -->

                        <div id="error-container"class="mb15">
                        {{--}}
{{//$errors->getBags()}}
{{--}}
                                </div>
                                <!--/ Error container -->

                                <br><br>
                                <div class="form-group nm">
                                    <button type="submit" class="btn btn-block btn-success"><span class="semibold">Connexion</span></button>
                                </div>
                            </div>
                        </form>
@stop