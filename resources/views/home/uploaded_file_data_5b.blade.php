@php $count=0; $i = 0; @endphp
@foreach($details as $key)
    @foreach($key as $key1 => $detail)
        @if($detail['type_of_form_cfehi'] != null)
            <tr class="fileUploadRows 5b_file_{{$uploadStatus}}_{{$i}}" style="display: none;">
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            @php $data=['c','f','e','h','i']; @endphp
                            <select id ="select5B" name="type_of_form_5B">
                                    <option selected disabled>-- Select--</option>
                                    @foreach($data as $key=>$value)
                                            <option @if(strtolower($detail['type_of_form_cfehi']) == $value) {{"selected"}} @endif>{{strtoupper($value)}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <label class="error error_type_of_form_5B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="form_serial_no_5B" value="{{$detail['form_no.']}}"/>
                        </div>
                        <label class="error error_form_serial_no_5B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="tin_issuer_5B" value="{{$detail['tin_no._of_issuer']}}"/>
                        </div>
                        <label class="error error_tin_issuer_5B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control" name="issuer_name_5B" value="{{$detail['name_of_issuer']}}"/>
                        </div>
                        <label class="error error_issuer_name_5B" style="display: none;">This field is required.</label>
                    </div>
                </td>          
                <td>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control" name="sales_value_5B" value="{{$detail['sales_value']}}"/>
                        </div>
                        <label class="error error_sales_value_5B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td>
                    <div class="form-group has-feedback">
                        <div class="form-line">
                            <input type="number" class="form-control" name="vat_rate_5B" value="{{$detail['rate_under_vat']}}"/>
                            <span class="form-control-feedback">%</span>
                        </div>
                        <label class="error error_vat_rate_5B" style="display: none;">This field is required.</label>
                    </div>
                </td>
                <td> 
                    <button fileClass="5b_file_{{$uploadStatus}}_{{$i}}" type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRow5B" data-toggle="tooltip" data-placement="top" title="Delete Row"><i class="material-icons">remove</i></button>
                </td>
            </tr>
           @php  $count++; @endphp
        @endif
    @endforeach
    @php $i++; @endphp
@endforeach