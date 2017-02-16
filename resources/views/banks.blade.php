
 @extends('layouts.app')
 @section('content')

 <style type="text/css">
     #new_income{
        border: 1px ridge #cccccc;
     }
 </style>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    $(function () {         
        $('#incomes').highcharts({
                    chart: {
                type: 'pie'
            },
            title: {
                text: 'Browser market shares. January, 2015 to May, 2015'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: netmarketshare.com.'
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Microsoft Internet Explorer',
                    y: 56.33,
                    drilldown: 'Microsoft Internet Explorer'
                }, {
                    name: 'Chrome',
                    y: 24.03,
                    drilldown: 'Chrome'
                }, {
                    name: 'Firefox',
                    y: 10.38,
                    drilldown: 'Firefox'
                }, {
                    name: 'Safari',
                    y: 4.77,
                    drilldown: 'Safari'
                }, {
                    name: 'Opera',
                    y: 0.91,
                    drilldown: 'Opera'
                }, {
                    name: 'Proprietary or Undetectable',
                    y: 0.2,
                    drilldown: null
                }]
            }],
            drilldown: {
                series: [{
                    name: 'Microsoft Internet Explorer',
                    id: 'Microsoft Internet Explorer',
                    data: [
                        ['v11.0', 24.13],
                        ['v8.0', 17.2],
                        ['v9.0', 8.11],
                        ['v10.0', 5.33],
                        ['v6.0', 1.06],
                        ['v7.0', 0.5]
                    ]
                }, {
                    name: 'Chrome',
                    id: 'Chrome',
                    data: [
                        ['v40.0', 5],
                        ['v41.0', 4.32],
                        ['v42.0', 3.68],
                        ['v39.0', 2.96],
                        ['v36.0', 2.53],
                        ['v43.0', 1.45],
                        ['v31.0', 1.24],
                        ['v35.0', 0.85],
                        ['v38.0', 0.6],
                        ['v32.0', 0.55],
                        ['v37.0', 0.38],
                        ['v33.0', 0.19],
                        ['v34.0', 0.14],
                        ['v30.0', 0.14]
                    ]
                }, {
                    name: 'Firefox',
                    id: 'Firefox',
                    data: [
                        ['v35', 2.76],
                        ['v36', 2.32],
                        ['v37', 2.31],
                        ['v34', 1.27],
                        ['v38', 1.02],
                        ['v31', 0.33],
                        ['v33', 0.22],
                        ['v32', 0.15]
                    ]
                }, {
                    name: 'Safari',
                    id: 'Safari',
                    data: [
                        ['v8.0', 2.56],
                        ['v7.1', 0.77],
                        ['v5.1', 0.42],
                        ['v5.0', 0.3],
                        ['v6.1', 0.29],
                        ['v7.0', 0.26],
                        ['v6.2', 0.17]
                    ]
                }, {
                    name: 'Opera',
                    id: 'Opera',
                    data: [
                        ['v12.x', 0.34],
                        ['v28', 0.24],
                        ['v27', 0.17],
                        ['v29', 0.16]
                    ]
                }]
            }
        });
        $('#expenses').highcharts({
                            chart: {
                        type: 'pie'
                    },
                    title: {
                        text: 'Browser market shares. January, 2015 to May, 2015'
                    },
                    subtitle: {
                        text: 'Click the slices to view versions. Source: netmarketshare.com.'
                    },
                    plotOptions: {
                        series: {
                            dataLabels: {
                                enabled: true,
                                format: '{point.name}: {point.y:.1f}%'
                            }
                        }
                    },

                    tooltip: {
                        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
                    },
                    series: [{
                        name: 'Brands',
                        colorByPoint: true,
                        data: [{
                            name: 'Microsoft Internet Explorer',
                            y: 56.33,
                            drilldown: 'Microsoft Internet Explorer'
                        }, {
                            name: 'Chrome',
                            y: 24.03,
                            drilldown: 'Chrome'
                        }, {
                            name: 'Firefox',
                            y: 10.38,
                            drilldown: 'Firefox'
                        }, {
                            name: 'Safari',
                            y: 4.77,
                            drilldown: 'Safari'
                        }, {
                            name: 'Opera',
                            y: 0.91,
                            drilldown: 'Opera'
                        }, {
                            name: 'Proprietary or Undetectable',
                            y: 0.2,
                            drilldown: null
                        }]
                    }],
                    drilldown: {
                        series: [{
                            name: 'Microsoft Internet Explorer',
                            id: 'Microsoft Internet Explorer',
                            data: [
                                ['v11.0', 24.13],
                                ['v8.0', 17.2],
                                ['v9.0', 8.11],
                                ['v10.0', 5.33],
                                ['v6.0', 1.06],
                                ['v7.0', 0.5]
                            ]
                        }, {
                            name: 'Chrome',
                            id: 'Chrome',
                            data: [
                                ['v40.0', 5],
                                ['v41.0', 4.32],
                                ['v42.0', 3.68],
                                ['v39.0', 2.96],
                                ['v36.0', 2.53],
                                ['v43.0', 1.45],
                                ['v31.0', 1.24],
                                ['v35.0', 0.85],
                                ['v38.0', 0.6],
                                ['v32.0', 0.55],
                                ['v37.0', 0.38],
                                ['v33.0', 0.19],
                                ['v34.0', 0.14],
                                ['v30.0', 0.14]
                            ]
                        }, {
                            name: 'Firefox',
                            id: 'Firefox',
                            data: [
                                ['v35', 2.76],
                                ['v36', 2.32],
                                ['v37', 2.31],
                                ['v34', 1.27],
                                ['v38', 1.02],
                                ['v31', 0.33],
                                ['v33', 0.22],
                                ['v32', 0.15]
                            ]
                        }, {
                            name: 'Safari',
                            id: 'Safari',
                            data: [
                                ['v8.0', 2.56],
                                ['v7.1', 0.77],
                                ['v5.1', 0.42],
                                ['v5.0', 0.3],
                                ['v6.1', 0.29],
                                ['v7.0', 0.26],
                                ['v6.2', 0.17]
                            ]
                        }, {
                            name: 'Opera',
                            id: 'Opera',
                            data: [
                                ['v12.x', 0.34],
                                ['v28', 0.24],
                                ['v27', 0.17],
                                ['v29', 0.16]
                            ]
                        }]
                    }
                });
        
    });
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="pull left">Bank Accounts</span>
                    <span class="pull-right"><i class="glyphicon glyphicon-plus"></i><a href="#new_income" data-toggle="collapse">&nbsp;Add Account</a></span>
                </div>                
            </div>
        </div>          

    </div>
    <div class="collapse" id="new_income">
        <div class="panel panel-success">
            <div class="panel-heading">
                <span class="pull left">New Bank Account</span>
                <!-- <span class="pull-right"><i class="glyphicon glyphicon-plus"></i>Add Account</span> -->
            </div>                
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('add_new_bank') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="account_number" class="col-md-4 control-label">Account Number</label>

                            <div class="col-md-6">
                                <input id="account_number" type="text" class="form-control" name="account_number" value="{{ old('account_number') }}" required autofocus>

                                @if ($errors->has('account_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('bank_code') ? ' has-error' : '' }}">                            
                        <label for="bank_code" class="col-md-4 control-label">Bank</label>
                            <div class="col-md-6">
                                <select id="bank_code" class="form-control" name="bank_code">
                                    @foreach ($banks as $bank)
                                    <option value="{{$bank->bank_code}}">{{$bank->bank_name}}</option>

                                    @endforeach
                                </select>                                
                                
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control" name="amount" required>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>

                                 <button type="reset" class="btn btn-default">
                                    Clear
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
        
    </div>
    <div>    
    <div class="col-md-12" style="margin-top: 2%">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Account Number</th>
                    <th>Bank Code</th>
                    <th>Bank Name</th>
                    <th>Current Balance</th>
                    <th>Added On</th>
                    <th>Last Updated</th>
                    <th>Added By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bank_accounts as $bank_account)                
                <tr>
                    <td>{{ $bank_account->account_number}}</td>
                    <td>{{ $bank_account->bank_code}}</td>
                    <td>{{ $bank_account->bank_name}}</td>
                    <td>{{ $bank_account->amount}}</td>
                    <td>{{ $bank_account->created_at}}</td>
                    <td>{{ $bank_account->updated_at}}</td>
                    <td>@if (Auth::user()->id ==$bank_account->user_id)
                        You
                        @else
                            {{ ucfirst($bank_account->firstname)}} {{ ucfirst($bank_account->lastname)}}
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
    </div>
</div>
@endsection