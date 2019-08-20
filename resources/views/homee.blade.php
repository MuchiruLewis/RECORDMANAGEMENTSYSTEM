@extends('layouts.police')
@section('content')

<div class="content mt-3">


<div class="col-xl-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-archive text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">TOTAL OB RECORDS</div>
                    <div class="stat-digit"><?php echo count($policeob);?></div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-xl-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-bell text-alert border-alert"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">TOTAL SOS ALERTS</div>
                    <div class="stat-digit"><?php echo count($locations);?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">SUSPICIOUS ACTIVITY ALERTS</div>
                    <div class="stat-digit"><?php echo count($suspicious);?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">TOTAL ARREST RECORDS</div>
                    <div class="stat-digit"><?php echo count($suspicious);?></div>
                </div>
            </div>
        </div>
    </div>
</div>




    
















</div>












@endsection