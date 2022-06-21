@extends('layouts.dashboard')

@section('content')
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"></div>
                    
                    <div class="card-body">
                        DASHBOARD:
                        <br>
                        <br>
                        
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-primary card-header-icon">
                                            <div class="card-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            
                                            {{-- <div class="card-icon">
                                            
                                            <i class="material-icons">user</i>
                                        </div> --}}
                                        <p class="card-category"># Users</p>
                                        <h3 class="card-title">{{$stats[1]->value->total}}
                                            {{-- <small>GB</small> --}}
                                        </h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-info">info</i>
                                            <a href="javascript:;">See more Info</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="fa fa-sitemap"></i>
                                        </div>
                                        <p class="card-category"># Organizations</p>
                                        <h3 class="card-title">{{$stats[0]->value->total}}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            {{-- <i class="material-icons">update</i>  --}}
                                            Total number of Organizations
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">menu</i>
                                        </div>
                                        <p class="card-category"># Active Offers</p>
                                        <h3 class="card-title">{{$stats[3]->value->total}}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            {{-- <i class="material-icons">local_offer</i>  --}}
                                            Total # of offers a user can purchase
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">paid</i>
                                        </div>
                                        <p class="card-category"># Active Subs</p>
                                        <h3 class="card-title">{{$stats[6]->value->total}}</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            {{-- <i class="material-icons">date_range</i>  --}}
                                            # of active subscriptions (not expired)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                        
                        
                        {{-- <div class="row">
                        <div class="col-md-4">
                        <div class="card card-chart">
                        <div class="card-header card-header-success">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                    <h4 class="card-title">Subscription Chart</h4>
                    <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                <i class="material-icons">access_time</i> updated 4 minutes ago
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
<div class="card card-chart">
<div class="card-header card-header-warning">
<div class="ct-chart" id="websiteViewsChart"></div>
</div>
<div class="card-body">
<h4 class="card-title">Email Subscriptions</h4>
<p class="card-category">Last Campaign Performance</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> campaign sent 2 days ago
</div>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card card-chart">
<div class="card-header card-header-danger">
<div class="ct-chart" id="completedTasksChart"></div>
</div>
<div class="card-body">
<h4 class="card-title">Recently Unsubscribed</h4>
<p class="card-category">Last Campaign Performance</p>
</div>
<div class="card-footer">
<div class="stats">
<i class="material-icons">access_time</i> campaign sent 2 days ago
</div>
</div>
</div>
</div>
</div> --}}

<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <span class="nav-tabs-title">Active Offers:</span>
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                                <a class="nav-link active   " href="#profile" data-toggle="tab">
                                    <i class="material-icons"></i> Offer 1
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#messages" data-toggle="tab">
                                    <i class="material-icons"></i> Offer 2
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#settings" data-toggle="tab">
                                    <i class="material-icons"></i> Offer 3
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 1 "</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 2 ?</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 3
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 4</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="messages">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 1
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 2"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="settings">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 3</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>PRODUCT 4
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Product 4"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Sources </h4>
                <p class="card-category">(Payment Processors)</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>Name</th>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Stripe</td>
                            
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Apple Pay</td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Users </h4>
                <p class="card-category">(Recently Created)</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        
                    </thead>
                    <tbody>
                        
                        @for ($i=0; $i < 10; $i++)
                            <tr>
                                <td>{{10000 - $i}}</td>
                                <td>test user</td>
                                <td>test{{$i}}@test.com</td>
                                <td>June 14th, 2022</td>
                            </tr>
                        @endfor
                        
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Subscriptions </h4>
                <p class="card-category">(Recently Created)</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>Source</th>
                        <th>Offer</th>
                        <th>Buyer Email</th>
                        
                    </thead>
                    <tbody>
                        
                        @for ($i=0; $i < 10; $i++)
                            <tr>
                                <td>{{ 10000 - $i}}</td>
                                <td>Stripe</td>
                                <td>Professional</td>
                                <td>test{{$i}}@test.com</td>
                            </tr>
                        @endfor
                        
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
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
