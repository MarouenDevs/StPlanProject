@extends('layouts.base')
@section('pageTitle')
<span class="figure"><i class="ico-screen"></i></span>
Tableau de bord
@stop

@section('mainContent')
<div class="row">

<div class="col-sm-4">
                                <!-- START Statistic Widget -->
                                <div class="table-layout animation delay animating fadeInDown">
                                    <div class="col-xs-4 panel bgcolor-info text-center">
                                        <div class="ico-users3 fsize24"></div>
                                    </div>
                                    <div class="col-xs-8 panel">
                                        <div class="panel-body text-center">
                                            <h4 class="semibold nm">1845</h4>
                                            <p class="semibold text-muted mb0 mt5 ellipsis">REGISTERED USERS</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ END Statistic Widget -->
                            </div>


</div>
@stop
