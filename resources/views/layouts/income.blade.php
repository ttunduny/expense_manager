
 @extends('layouts.app')
 @section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="pull left">Dashboard</span>
                    <span class="pull-right">I have Ksh. 50,000 in 3 bank Accounts</span>
                </div>                
            </div>
        </div>          

    </div>
    <div>
    <div class="col-md-6">
        <div id="incomes" class="dash_charts" style="border-right: 1px black !important"></div>        
    </div>
    <div class="col-md-6">        
        <div id="expenses" class="dash_charts"></div>
    </div>
    </div>
</div>
@endsection