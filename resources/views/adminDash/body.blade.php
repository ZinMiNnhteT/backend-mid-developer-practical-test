<div class="row">
    <div class="col-lg-7  col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex m-b-30 no-block">
                    <h5 class="card-title m-b-0 align-self-center">Daily Income</h5>
                    <div class="ml-auto">
                        <select class="custom-select border-0">
                            <option selected="">Today</option>
                            <option value="1">Tomorrow</option>
                        </select>
                    </div>
                </div>
                <div id="income" style="width:100%;"></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class=" col-xl-4 col-lg-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">485</h3>
                        <h6 class="card-subtitle">All Sales</h6>
                        <div style="max-width:200px" class="m-b-40">
                            <canvas id="salesChart"></canvas>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">185</h3>
                        <h6 class="card-subtitle">All Orders</h6>
                        <div style="max-width:200px" class="m-b-40">
                            <canvas id="orderChart"></canvas>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">45</h3>
                        <h6 class="card-subtitle">All Transactions</h6>
                        <div style="max-width:200px" class="m-b-40">
                            <canvas id="transactionChart"></canvas>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">655</h3>
                        <h6 class="card-subtitle">All Costs</h6>
                        <div style="max-width:200px" class="m-b-40">
                            <canvas id="costChart"></canvas>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 3px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body p-b-0">
                <h5 class="card-title">Weather Report</h5>
                <h6 class="card-subtitle m-b-0">This is the Ahmedabads Weather report</h6>
            </div>
            <div class="card-body bg-light">
                <div class="d-flex no-block align-items-center">
                    <span>
                        <h2 class="">Monday</h2><small>7th May 2017</small>
                    </span>
                    <div class="ml-auto">
                        <canvas class="sleet" width="44" height="44"></canvas> <span class="display-6">32<sup>°F</sup></span> </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td>Wind</td>
                                    <td class="font-medium">ESE 17 mph</td>
                                </tr>
                                <tr>
                                    <td>Humidity</td>
                                    <td class="font-medium">83%</td>
                                </tr>
                                <tr>
                                    <td>Pressure</td>
                                    <td class="font-medium">28.56 in</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table no-border">
                            <tbody>
                                <tr>
                                    <td>Cloud Cover</td>
                                    <td class="font-medium">78%</td>
                                </tr>
                                <tr>
                                    <td>Ceiling</td>
                                    <td class="font-medium">25760 ft</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4 col-4 text-center">
                        <h5>Tue</h5>
                        <div class="m-t-10 m-b-10">
                            <canvas class="sleet" width="30" height="30"></canvas>
                        </div>
                        <h5>32<sup>°F</sup></h5>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4 col-4 text-center">
                        <h5>Wed</h5>
                        <div class="m-t-10 m-b-10">
                            <canvas class="clear-day" width="30" height="30"></canvas>
                        </div>
                        <h5>34<sup>°F</sup></h5>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4 col-4 text-center">
                        <h5>Thu</h5>
                        <div class="m-t-10 m-b-10">
                            <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                        </div>
                        <h5>31<sup>°F</sup></h5>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4 col-4 text-center">
                        <h5>Fri</h5>
                        <div class="m-t-10 m-b-10">
                            <canvas class="cloudy" width="30" height="30"></canvas>
                        </div>
                        <h5>32<sup>°F</sup></h5>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4 col-4 text-center">
                        <h5>Sat</h5>
                        <div class="m-t-10 m-b-10">
                            <canvas class="snow" width="30" height="30"></canvas>
                        </div>
                        <h5>12<sup>°F</sup></h5>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-2 col-md-4 col-4 text-center">
                        <h5>Sun</h5>
                        <div class="m-t-10 m-b-10">
                            <canvas class="wind" width="30" height="30"></canvas>
                        </div>
                        <h5>32<sup>°F</sup></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Activity</h5>
                <h6 class="card-subtitle">This is the users daily activity</h6>
                <div class="steamline m-t-40">
                    <div class="sl-item">
                        <div class="sl-left bg-success"> <i class="ti-user"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                            <div class="desc">you can write anything </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                        <div class="sl-right">
                            <div class="font-medium">Send documents to Clark</div>
                            <div class="desc">Lorem Ipsum is simply </div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="img-circle" alt="user" src="../admin/assets/images/users/2.jpg"> </div>
                        <div class="sl-right">
                            <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Contrary to popular belief</div>
                        </div>
                    </div>
                    <div class="sl-item">
                        <div class="sl-left"> <img class="img-circle" alt="user" src="../admin/assets/images/users/3.jpg"> </div>
                        <div class="sl-right">
                            <div><a href="javascript:void(0)">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                            <div class="desc">Approve meeting with tiger
                                <br><a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body p-b-0">
                <h5 class="card-title">Feeds</h5>
            </div>
            <ul class="feeds">
                <li>
                    <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span>
                </li>
                <li>
                    <div class="bg-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span>
                </li>
                <li>
                    <div class="bg-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted">31 May</span>
                </li>
                <li>
                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span>
                </li>
                <li>
                    <div class="bg-dark"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span>
                </li>
                <li>
                    <div class="bg-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span>
                </li>
                <li>
                    <div class="bg-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <!-- Column -->
    <div class="col-lg-3">
        <div class="card card-body">
            <h5 class="card-title">Tax Deduction</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-info">$347</h1>
                    <p class="text-muted">APRIL 2017</p>
                    <b>(150 Sales)</b>
                </div>
                <div class="col-6">
                    <div id="sparkline1dash" class="text-right"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3">
        <div class="card card-body">
            <h5 class="card-title">Shipment</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-success">$647</h1>
                    <p class="text-muted">APRIL 2017</p>
                    <b>(150 Sales)</b>
                </div>
                <div class="col-6">
                    <div id="sparkline2dash" class="text-right m-t-30"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3">
        <div class="card card-body">
            <h5 class="card-title">Revenue generate</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-danger">$647</h1>
                    <p class="text-muted">APRIL 2017</p>
                    <b>(150 Sales)</b>
                </div>
                <div class="col-6">
                    <div id="sparkline3dash" class="text-right"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3">
        <div class="card card-body">
            <h5 class="card-title">Order received </h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-inverse">$647</h1>
                    <p class="text-muted">APRIL 2017</p>
                    <b>(150 Sales)</b>
                </div>
                <div class="col-6">
                    <div id="sparkline4dash" class="text-right"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ORDER STATUS</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>User</th>
                            <th>Order date</th>
                            <th>Amount</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tracking Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="javascript:void(0)" class="link"> Order #53431</a></td>
                            <td>Steve N. Horton</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 22, 2014</span></td>
                            <td>$45.00</td>
                            <td class="text-center">
                                <div class="label label-table label-success">Paid</div>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="link"> Order #53432</a></td>
                            <td>Charles S Boyle</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                            <td>$245.30</td>
                            <td class="text-center">
                                <div class="label label-table label-info">Shipped</div>
                            </td>
                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734531</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="link"> Order #53433</a></td>
                            <td>Lucy Doe</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 24, 2014</span></td>
                            <td>$38.00</td>
                            <td class="text-center">
                                <div class="label label-table label-info">Shipped</div>
                            </td>
                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089934571</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="link"> Order #53434</a></td>
                            <td>Teresa L. Doe</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 15, 2014</span></td>
                            <td>$77.99</td>
                            <td class="text-center">
                                <div class="label label-table label-info">Shipped</div>
                            </td>
                            <td class="text-center"><i class="fa fa-plane"></i> CGX0089734574</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="link"> Order #53435</a></td>
                            <td>Teresa L. Doe</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 12, 2014</span></td>
                            <td>$18.00</td>
                            <td class="text-center">
                                <div class="label label-table label-success">Paid</div>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="link">Order #53437</a></td>
                            <td>Charles S Boyle</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 17, 2014</span></td>
                            <td>$658.00</td>
                            <td class="text-center">
                                <div class="label label-table label-danger">Refunded</div>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="link">Order #536584</a></td>
                            <td>Scott S. Calabrese</td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 19, 2014</span></td>
                            <td>$45.58</td>
                            <td class="text-center">
                                <div class="label label-table label-warning">Unpaid</div>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
