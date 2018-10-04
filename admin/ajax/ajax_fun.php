<?php
include '../class/at-class.php';
if(isset($_POST['page']))
{
    $page = $_POST['page'];
    if($page=="active_deactive"){ 
        $page_name = $_POST['page_name'];
        active($_POST['table'],"{$_POST['field']}='{$_POST['active_val']}'","{$_POST['where']}='{$_POST['id']}'");
        if($_POST['active_val']==1){
            echo ucfirst($page_name)." Activated";    
        }else{
            echo ucfirst($page_name)." Deactivated";    
        }
    }
    if($page=="set_sessionadd"){ 
         
        $_SESSION['acc_addrsid'] = $_POST['term'];
         
    }
    if($page=="firm_customer_session"){ 
         
        if($_POST['Firm_Name']!=''){
            $_SESSION['Firm_Name'] = $_POST['Firm_Name'];
        }
        if($_POST['Customer']!=''){
            $_SESSION['Customer'] = $_POST['Customer'];
        }
        
    }
    if($page=="delete"){ 
        bindupdate($_POST['table_name'],array("is_delete"=>1), "{$_POST['field_name']}='{$_POST['id']}'");
        
        add_activity("{$_POST['activity_name']} Deleted By ","{$_POST['activity_name']} Deleted And {$_POST['activity_name']} Id Is {$_POST['id']}");
        
    }
    //get head name
    if($page=="get_head"){ 
        $term = $_POST['term'];
        $headname = get_results("select * from mst_head where Head_Name='$term'");
        
        $check_group_id = get_results("select * from mst_group where Head_Id='{$headname['Head_Id']}'");

        if($check_group_id['Group_Id']!=''){
            $grp_id = $check_group_id['Group_Id']+1;
        }else{
            $grp_id = $headname['Head_No']."001";
        }
        $json['Group_Id'] = $grp_id;
        $json['Head_No'] = $headname['Head_No'];
        $json['Head_Id'] = $headname['Head_Id'];
        $json['Head_Name'] = $headname['Head_Name'];
        echo json_encode($json);
    } 
    if($page=="get_grp"){ 
        $term = $_POST['term'];
        $headname = get_results("select * from mst_group where Group_Name='$term'");
        
        $check_group_id = get_results("select * from mst_acc where Group_Id='{$headname['Group_Id']}'");

        if($check_group_id['Group_Id']!=''){
            $grp_id = $check_group_id['Acc_id']+1;
        }else{
            $grp_id = $headname['Group_Id']."000001";
        }
        $json['Acc_id'] = $grp_id;
        echo json_encode($json);
    } 
    if($page=="add_partygrp"){ 
        $Party_Group_Name = $_POST['PartyGroupName'];
        $Credit_Limit = $_POST['Credit_Limit'];
        $Credit_Usage = $_POST['Credit_Usage'];
        $Credit_Balance = $_POST['Credit_Balance'];
        
        $insert = array(
            "Party_Group_Name" => $Party_Group_Name,
            "Credit_Limit" => $Credit_Limit,
            "Credit_Usage" => $Credit_Usage,
            "Credit_Balance" => $Credit_Balance,
        );
        
        bindinsert("mst_party_group", $insert);
        
        $json['Credit_Balance'] = $Credit_Balance;
        $json['Credit_Usage'] = $Credit_Usage;
        $json['Credit_Limit'] = $Credit_Limit;
        $json['Party_Group_Name'] = $Party_Group_Name;
        $json['Party_Group_Id'] = insertid();
        echo json_encode($json);
    } 
    if($page=="get_partygrp"){ 
        $term = $_POST['term'];
        $headname = get_results("select * from mst_party_group where Party_Group_Name='$term'");
        $json['Party_Group_Id'] = $headname['Party_Group_Id'];
        $json['Credit_Limit'] = $headname['Credit_Limit'];
        $json['Credit_Usage'] = $headname['Credit_Usage'];
        $json['Credit_Balance'] = $headname['Credit_Balance'];
        echo json_encode($json);
    } 
    if($page=="acc_addres"){ 
        $term = $_POST['term'];
        $headname = get_results("select * from mst_acc_add where Address1='$term'");
        $json['Acc_Address_Id'] = $headname['Acc_Address_Id'];
        echo json_encode($json);
    } 
    if($page=="get_inventorygrp"){ 
        $term = $_POST['term'];
        $headname = get_results("select * from mst_inventory_group where Group_Name='$term'");
        $json['Parent_Group_Id'] = $headname['Parent_Group_Id'];
        $json['Group_Id'] = $headname['Group_Id'];
        echo json_encode($json);
    } 
    if($page=="get_inventorycat"){ 
        $term = $_POST['term'];
        $headname = get_results("select * from mst_inventory_category where Inv_category_name='$term'");
        $json['Parent_category_id'] = $headname['Parent_category_id'];
        $json['Inv_category_id'] = $headname['Inv_category_id'];
        echo json_encode($json);
    } 
    if($page=="get_suppaccountdetails"){ 
        $term = $_POST['term'];
        $headname = get_results("select Acc_id,Group_Id,Party_Group_Id from mst_acc where AccName='$term'");
        $json['Acc_id'] = $headname['Acc_id'];
        $json['Party_Group_Id'] = $headname['Party_Group_Id'];
        echo json_encode($json);
    } 
    if($page=="get_state_name"){ 
        $term = $_POST['term'];
        
        $city_details = get_results("select state_id from city where city_name='{$term}'");
        
        $headname = get_results("select state_name from state where state_id='{$city_details['state_id']}'");
        $json['state_id'] = $headname['state_id'];
        $json['state_name'] = $headname['state_name'];
        echo json_encode($json);
    } 
        
    
    if($page=="get_inv"){ 
        $term = $_POST['Bill_No'];
        $headname = get_results("select * from trn_inv where Inv_No='$term'");
        
        $json['Inv_Date'] = $headname['Inv_Date'];
        $json['Net_Amt'] = $headname['Net_Amt'];
        $json['Sub_Total'] = $headname['Sub_Total'];
        $json['Bal_Amt'] = 1000;
        echo json_encode($json);
    } 
    if($page=="get_inv"){ 
        $term = $_POST['Bill_No'];
        $headname = get_results("select * from trn_inv where Inv_No='$term'");
        
        $json['Inv_Date'] = $headname['Inv_Date'];
        $json['Net_Amt'] = $headname['Net_Amt'];
        $json['Sub_Total'] = $headname['Sub_Total'];
        $json['Bal_Amt'] = 1000;
        echo json_encode($json);
    } 
    
    
    
    if($page=="get_exp"){ 
        $term = $_POST['Acc_Exp_Id'];
        $headname = get_results("SELECT * FROM `trn_exp` WHERE `Inv_No`='$term'");
        
        $json['Total_Amt'] = $headname['Total_Amt'];
        echo json_encode($json);
    } 
    
    if($page=="get_exp_id"){ 
        $term = $_POST['Bill_No'];
        $supplier = $_SESSION['Supplier'];
        $headname = get_results("select trn_exp.Exp_Id from trn_inv inner join trn_exp on trn_exp.`Inv_No` = trn_inv.`Inv_No` where trn_inv.Inv_No LIKE '$term' AND Acc_Id_Supplier ='$supplier'");
        
        $json['Exp_Id'] = $headname['Exp_Id'];
        echo json_encode($json);
       
    }
    
    if($page=="payment_session"){ 
         
        if($_POST['Supplier']!=''){
            $_SESSION['Supplier'] = $_POST['Supplier'];
        }
        
        
    }
    if ($page == "get_state_detail") {
        $term = $_POST['term'];

        $headname = get_results("select * from state where state_name='".trim($term)."'");
        $json['gst_code'] = $headname['gst_code'];
        $json['state_code'] = $headname['state_code'];
         
        echo json_encode($json);
    }
    if ($page == "get_inventory1") {
        $term = $_POST['term'];

        $headname = get_results("SELECT mst_inventory.Inventory_Name as 'Inventory_Name',trn_inv_details.Rate as 'Rate',trn_inv_details.Amt as 'Amt',trn_inv_details.qty as 'Qty' FROM `trn_inv` inner join trn_inv_details on trn_inv_details.`Inv_Id` = trn_inv.`Inv_Id` inner join mst_inventory on mst_inventory.`Inventory_Id` = trn_inv_details.Inventry_Id WHERE trn_inv.Inv_No LIKE '$term'");
        $json['Inventory_Name'] = $headname['Inventory_Name'];
        $json['Qty'] = $headname['Qty'];
        $json['Amt'] = $headname['Amt'];
        $json['Rate'] = $headname['Rate'];
        echo json_encode($json);
    }
    if ($page == "set_sessionfirm") {
        $term = $_POST['term'];

        $headname = get_results("select * from mst_our_firm where firm_name='". trim($term)."'");
        $json['firm_id'] = $headname['firm_id'];
        $_SESSION['tmpfirm_id'] = $headname['firm_id'];
        echo json_encode($json);
    }
    
    
    //24-03-2018
    
     if ($page == "get_lrdetails") {
        $term = $_POST['term'];
        $headname = get_results("select * from Trn_Lr where `Lr_No`='$term'");
        $accountid = get_results("SELECT
            `mst_acc`.`AccName`
        FROM
            `mst_acc_transpoter`
            INNER JOIN `mst_acc` 
                ON (`mst_acc_transpoter`.`Acc_Id` = `mst_acc`.`Acc_id`) where `mst_acc_transpoter`.`Acc_Transpoter_Id`='{$headname['Acc_Transpor_Id']}';");

        $address = get_results("SELECT
            `mst_acc_add`.`Office_Name`
        FROM
            `mst_acc_add`
             where `mst_acc_add`.`Acc_Address_Id`='{$headname['Acc_Address_Id']}';");

        $jsondata['Bales'] = $headname['Bales'];
        $jsondata['AccName'] = $accountid['AccName'];
        $jsondata['Office_Name'] = $address['Office_Name'];
        echo json_encode($jsondata);
    }

    if ($page == "get_acc_add_id") {
        $term =$_POST['term'];
        $headname = get_results("SELECT Acc_Address_Id, Acc_Id FROM mst_acc_add WHERE Gst_No='$term'");
        $json['Acc_Address_Id'] = $headname['Acc_Address_Id'];
        $json['Acc_id'] = $headname['Acc_Id'];
        echo json_encode($json);
    }
    if ($page == "get_customer_id") {
        $term =$_POST['term'];
        $headname = get_results("SELECT Acc_Address_Id, Acc_Id FROM mst_acc_add WHERE Gst_No='$term'");
        $json['Acc_id'] = $headname['Acc_Id'];
        echo json_encode($json);
    }
}

 if($page=="change_salestatus")
    {
        bindupdate("tbl_outstanding", array("is_paid"=>$_POST['ostatus']),"outstanding_id='{$_POST['id']}'");
//        echo json_encode($prod);
    }