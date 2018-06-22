    @extends('layouts.v_tran_home')

@section('content')
<!-- Tran 2 -->
    <div class="modal fade" id="tran2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="AssignLicenseLabel">Tran 2</h4>
                </div>
                <div class="modal-body">
                    <ul class="form-menu">
                        <li>
                            <a href="javascript:void(0);" class="btn btn-link">
                                view
                            </a>
                            <h4>Tran 2</h4>
                            <p>
                                <i class="material-icons">access_time</i> Submitted - 14 mins ago
                            </p>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-link">
                                view
                            </a>
                            <h4>Tran 2</h4>
                            <p>
                                <i class="material-icons">access_time</i> Submitted - 10/05/2017
                            </p>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-link">
                                view
                            </a>
                            <h4>Tran 2</h4>
                            <p>
                                <i class="material-icons">access_time</i> Submitted - 20/05/2017
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-indigo waves-effect">NEW TRAN 2</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- #Top Bar -->
    <section class="content content-full">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="ribbon-title">Tran 3B</div>
                        <div class="body">
                            <section id="wizard" class="steps-wizard">
                                <form id="commentForm" method="get" action="">
                                    <h3 class="fancy-title">AF5454548989DF<br><small>ABC Company</small> </h3>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="tran3b">
                                            <thead>
                                                <tr>
                                                    <th>CTD No.</th>
                                                    <th>Invoices no. against which CTD has been issued</th>
                                                    <th>Months in which these clearances were made against the invoice</th>
                                                    <th>GSTIN Nos of all the intermediate buyers and sellers through whom the
                                                        goods have passed</th>
                                                    <th>Value of Goods</th>
                                                    <th>Central Excise duty paid</th>
                                                    <th><button id="addRowTran3B" type="button" class="btn bg-indigo m-b-10">Add row</button></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tran3btbody">
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>





                                    <ul class="pager wizard">
                                        <li class="save js-sweetalert">
                                            <button type="button" class="btn bg-green" data-type="success">Save Draft</button>
                                        </li>
                                        <li class="finish js-sweetalert">
                                            <button type="button" class="btn bg-green waves-effect" data-type="cancel">Upload to GSTN</button>
                                        </li>
                                        <li class="finish">
                                            <button type="button" class="btn bg-indigo" id="printMe">Print</button>
                                        </li>
                                    </ul>
                                </form>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    
    @push('script')
       <script src="{{asset('vtran/js/tranform.js')}}"></script>
    @endpush