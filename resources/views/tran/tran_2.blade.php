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
                    <div class="ribbon-title">Tran 2</div>
                    <div class="body">
                        <section id="wizard" class="steps-wizard">
                            <form id="commentForm" method="get" action="">

                                <h3 class="fancy-title">AF5454548989DF<br><small>ABC Company</small> </h3>
                                <fieldset>
                                    <div class="row m-t-15">
                                        <div class="col-lg-2 col-md-4">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="monthyear form-control" placeholder="Select Tax Period" />
                                                </div>
                                            </div>                                               
                                        </div>
                                    </div>
                                </fieldset>
                                 <h4>
                                                    Details of inputs held on stock on appointment date in respect of which he is not in possession of any invoice/document
evidencing payment of tax carried forward to Electronic Credit ledger.
                                                </h4>
                                <div class="print-page">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="tran2-1">
                                            <thead>
                                                <tr>
                                                    <th colspan="3" class="text-center">Opening stock for the tax period</th>
                                                    <th colspan="5" class="text-center">Outward supply made</th>
                                                    <th class="text-center">Closing balance</th>
                                                </tr>
                                                <tr>
                                                    <th>HSN (at 6 digitlevel)</th>
                                                    <th>Unit</th>
                                                    <th>Qty.</th>
                                                    <th>Qty</th>
                                                    <th>Value</th>
                                                    <th>Central Tax</th>
                                                    <th>Integrated Tax</th>
                                                    <th>ITC allowed</th>
                                                    <th>Qty</th>
                                                    <th><button id="addRowTran2-1" type="button" class="btn bg-indigo m-b-10">Add row</button></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tran2-1btbody">
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


                                    <h4>Credit on State Tax on the stock mentioned in 4 above (To be there only in States having VAT at single point)</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover" id="tran2-2">
                                            <thead>
                                                <tr>
                                                    <th colspan="3" class="text-center">Opening stock for the tax period</th>
                                                    <th colspan="4" class="text-center">Outward supply made</th>
                                                    <th class="text-center">Closing balance</th>
                                                </tr>
                                                <tr>
                                                    <th>HSN (at 6 digitlevel)</th>
                                                    <th>Unit</th>
                                                    <th>Qty.</th>
                                                    <th>Qty</th>
                                                    <th>Value</th>
                                                    <th>State Tax</th>
                                                    <th>ITC allowed</th>
                                                    <th>Qty</th>
                                                    <th><button id="addRowTran2-2" type="button" class="btn bg-indigo m-b-10">Add row</button></th>
                                                </tr>
                                            </thead>
                                            <tbody id="tran2-2btbody">
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