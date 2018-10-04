<?php
include '../class/at-class.php';
if($_SESSION['is_super']==1){
     $where = "";
 }else{
     $where = "`emp_firm_role`.`emp_id`='". userloginid()."' and";
}
?>
<!-- Modal -->
<script>$('#firmchng').trigger('click');</script>

<button type="button" class="btn btn-info btn-xs" id="firmchng" data-toggle="modal" data-target="#firmprtypreyear" style="display: none;"><span class="fa fa-pencil-square-o"></span></button>
<div id="firmprtypreyear" class="modal fade" role="dialog" >
    <center>

        <div class="modal-dialog" style="width: 35%">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                    <h4 class="modal-title">Change Firm & Preyear</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>
                                <label>Firm</label>
                            </th>
                            <th>
                                <label>Pre Year</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <select name="cfirm_name" class="form-control">
                                    <option>Select Firm</option>
                                    <?php
                                
                                    $get_emp_firms = get_result("select * from tbl_company_master");
                                 
                                    foreach ($get_emp_firms as $firmname){
                                        $selectedname = $_SESSION['current_firm_id']==$firmname['company_id'] ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $firmname['company_id']; ?>" <?php echo $selectedname; ?>><?php echo $firmname['company_name']; ?></option>
                                    <?php } ?>
                                    
                                </select>
                            </td>
                            <td id="preyeardrop">
                                <select name="cpreyear" class="form-control">
                                    <?php
                                    if(isset($_SESSION['current_firm_id'])){
                                        firm_selecthtml($_SESSION['current_firm_id']);
                                    }else{
                                    ?>
                                    <option value="">Select Pre Year</option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary save_firmpreyear">Change</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <label id="total_balance"></label>

                    <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                </div>
            </div>

        </div>
    </center>
</div>
<script>
    $('select[name="cfirm_name"]').on("change",function(){
        var firm_id = $('select[name="cfirm_name"]').val();
        $.post('<?php echo base_url()."role/firm-preyear.php"; ?>',{page:'firmyear',firm_id:firm_id},function(data){
            $('#preyeardrop').empty();   
            $('#preyeardrop').html(data);   
       });
    });
    $('.save_firmpreyear').click(function(){
        var firm_id = $('select[name="cfirm_name"]').val();
        var cpreyear = $('select[name="cpreyear"]').val();
        $.post('<?php echo base_url()."role/firm-preyear.php"; ?>',{page:'save_preyear',firm_id:firm_id,cpreyear:cpreyear},function(data){
               location.reload();
       });
    });
</script>