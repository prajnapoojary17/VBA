$(function() 
{    
    var tran3abody = $('#tran3a').children('tbody');
    var tran3a = tran3abody.length ? tran3abody : $('#tran3a');
    $('#addRowTran3A').click(function() 
    {
        tran3a.append('<tr>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                               '</div>'+
                            '</td>'+
                            '<td>'+
                                '<div class="form-group">'+
                                    '<div class="form-line">'+
                                        '<input type="text" class="form-control" />'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                            '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRowTran3a" data-toggle="tooltip" data-placement="top" title="Delete Row">'+
                                '<i class="material-icons">remove</i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>'
                ); 
        $.AdminBSB.input.activate();
    });
    $('#tran3atbody').on('click', '.removeRowTran3a', function () {
        $(this).closest('tr').remove();


    });
    
    
    var tran3bbody = $('#tran3b').children('tbody');
    var tran3b = tran3bbody.length ? tran3bbody : $('#tran3b');
    $('#addRowTran3B').click(function() 
    {
        tran3b.append('<tr>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRowTran3b" data-toggle="tooltip" data-placement="top" title="Delete Row">'+
                                '<i class="material-icons">remove</i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>'
                );
        $.AdminBSB.input.activate();
    });
    $('#tran3btbody').on('click', '.removeRowTran3b', function () {
        $(this).closest('tr').remove();
    });
    
    
    var tran21bbody = $('#tran2-1').children('tbody');
    var tran21 = tran21bbody.length ? tran21bbody : $('#tran2-1');
    $('#addRowTran2-1').click(function() 
    {
        tran21.append('<tr>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRowTran2-1" data-toggle="tooltip" data-placement="top" title="Delete Row">'+
                                '<i class="material-icons">remove</i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>'
                );
        $.AdminBSB.input.activate();
    });
    $('#tran2-1btbody').on('click', '.removeRowTran2-1', function () {
        $(this).closest('tr').remove();
    });
    
    var tran22bbody = $('#tran2-2').children('tbody');
    var tran22 = tran22bbody.length ? tran22bbody : $('#tran2-2');
    $('#addRowTran2-2').click(function() 
    {
        tran22.append('<tr>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+                        
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRowTran2-2" data-toggle="tooltip" data-placement="top" title="Delete Row">'+
                                '<i class="material-icons">remove</i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>'
                );
        $.AdminBSB.input.activate();
    });
    $('#tran2-2btbody').on('click', '.removeRowTran2-2', function () {
        $(this).closest('tr').remove();
    });
    
    
    var tran31bbody = $('#tran31').children('tbody');
    var tran31 = tran31bbody.length ? tran31bbody : $('#tran31');
    $('#addRowTran31').click(function() 
    {
        tran31.append('<tr>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+                                            
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRowTran31" data-toggle="tooltip" data-placement="top" title="Delete Row">'+
                                '<i class="material-icons">remove</i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>'
                );
        $.AdminBSB.input.activate();
    });
    $('#addRowTran31body').on('click', '.removeRowTran31', function () {
        $(this).closest('tr').remove();
    });
    
    
    var tran32bbody = $('#tran32').children('tbody');
    var tran32 = tran32bbody.length ? tran32bbody : $('#tran32');
    $('#addRowTran32').click(function() 
    {
        tran32.append('<tr>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+
                        '<td>'+
                            '<div class="form-group">'+
                                '<div class="form-line">'+
                                    '<input type="text" class="form-control" />'+
                                '</div>'+
                            '</div>'+
                        '</td>'+                                            
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float removeRowTran32" data-toggle="tooltip" data-placement="top" title="Delete Row">'+
                                '<i class="material-icons">remove</i>'+
                            '</button>'+
                        '</td>'+
                    '</tr>'
                );
        $.AdminBSB.input.activate();
    });
    $('#addRowTran32body').on('click', '.removeRowTran32', function () {
        $(this).closest('tr').remove();
    });
});
