  <div class="modal-header" id="updateLicenseHeader">
                                            <h4 class="modal-title" id="AssignLicenseLabel">Update GSTN DETAIL</h4>
                                        </div>
                                         <form  method="POST" action="{{url('/update-license-detail')}}" id="updateGstnForm">
                                        <div class="modal-body">
                                          
                                 {{ csrf_field() }}
                             <input type="hidden" class="form-control" name="registeredPersonId" value="{{$gstn->registeredPersonId}}">
                            <div class="form-group form-float">
                                <div class="form-line <?php if(isset($gstn->legalName)){ echo 'focused'; } ?>">
                                    <input type="text" class="form-control" name="legalName" value="{{$gstn->legalName}}">
                                    <label class="form-label">Legal Entity</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line <?php if(isset($gstn->tradeName)){ echo 'focused'; } ?>">
                                    <input type="text" class="form-control" name="tradeName" value="{{$gstn->tradeName}}">
                                    <label class="form-label">Trade Name </label>
                                </div>
                            </div>
                           
                                </div>
                                        <div class="modal-footer">
                                             <button type="submit" class="btn btn-link waves-effect"  id="updateLicense">Update LICENSE</button>
                                 
                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                        </div>
                                          </form>
