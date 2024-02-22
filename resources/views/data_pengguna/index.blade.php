@extends('_template_back.layout')

@section('content')

	<!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">Hi, welcome back!</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a   href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Basic Tables</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-2 mt-2">SIMPLE TABLE</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <p class="tx-12 text-muted mb-2">Example of Azira Simple Table. <a href="">Learn more</a></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Joan Powell</td>
                                    <td>Associate Developer</td>
                                    <td>$450,870</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Gavin Gibson</td>
                                    <td>Account manager</td>
                                    <td>$230,540</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Julian Kerr</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>$55,300</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Cedric Kelly</td>
                                    <td>Accountant</td>
                                    <td>$234,100</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Samantha May</td>
                                    <td>Junior Technical Author</td>
                                    <td>$43,198</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
    
@endsection