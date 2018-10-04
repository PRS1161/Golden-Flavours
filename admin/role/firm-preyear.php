<?php
include '../class/at-class.php';
if(!is_ajax_request())
{
    redirect(base_url());
}
if(isset($_POST['page']) && $_POST['page']=="firmyear")
{
?>
<select class="form-control" name="cpreyear">
<?php
firm_selecthtml($_POST['firm_id']);
?>
</select>
<?php
}
if(isset($_POST['page']) && $_POST['page']=="save_preyear"){
    
    
    $get_firm_details = get_results("select * from tbl_company where company_id='{$_POST['firm_id']}'");
    
    $_SESSION['current_firm_id'] = $_POST['firm_id'];
    $_SESSION['current_firm_name'] = $get_firm_details['company_name'];
    $_SESSION['current_preyear'] = $_POST['cpreyear'];
    $_SESSION['year_change'] = " where firm_id='{$_POST['firm_id']}' and cr_year='{$_POST['cpreyear']}'";
    
    
}
?>