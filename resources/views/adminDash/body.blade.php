<div class="row">
    <!-- Column -->
    <div class="col-lg-3 mt-3">
        <div class="card p-3">
            <h5 class="card-title">TOTAL USER</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-info">{{ $user }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 mt-3">
        <div class="card p-3">
            <h5 class="card-title">TOTAL COMPANIES</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-success">{{$company}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 mt-3">
        <div class="card p-3">
            <h5 class="card-title">TOTAL EMPLOYEE</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-danger">{{$employee}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 mt-3">
        <div class="card p-3">
            <h5 class="card-title">TOTAL ROLE</h5>
            <div class="row">
                <div class="col-6 m-t-30">
                    <h1 class="text-inverse">{{$role}}</h1>
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
            <div class="card-body m-3">
                <h5 class="card-title">LIST OF RECENT COMPANIES</h5>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Website</th>
                            <th>CREATED AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $key=>$company)

                        <tr>
                            <td>{{ $key + 1 }} </td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->phone }}</td>
                            <td class="text-center">
                                <div class="label label-table label-success">{{ $company->website }}</div>
                            </td>
                            <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ $company->created_at }}</span></td>
                            @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
