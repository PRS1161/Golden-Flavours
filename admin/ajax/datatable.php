<?php
include '../class/at-class.php';


if(isset($_GET['page']))
{
    $page = $_GET['page'];
    
    if($page=="get_admin"){
        
        $query="SELECT * FROM `tbl_admin`";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['admin_id'] = $result['admin_id'];
            $dt['admin_name'] = $result['admin_name'];
            $dt['admin_email'] = $result['admin_email'];
            $dt['admin_photo'] = $result['admin_photo'];
            $dt['admin_mobile'] = $result['admin_mobile'];
            
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_category"){
        
        
                                                                           
        $result = get_result($query);
        $arr = array();
        $query=mysqli_query("SELECT * FROM `tbl_category`");
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['c_id'] = $result['c_id'];
            $dt['c_name'] = $result['c_name'];
            $dt['c_image'] = $result['c_image'];
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_sub_category"){
        
        $query="SELECT * FROM `tbl_sub_category`";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['s_id'] = $result['p_id'];
            $dt['s_name'] = $result['p_name'];
            $dt['s_image'] = $result['p_image'];
            $dt['c_id'] = $result['c_id'];
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_product"){
        
        $query="SELECT * FROM `tbl_product_master`";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['p_id'] = $result['p_id'];
            $dt['p_name'] = $result['p_name'];
            $dt['p_image'] = $result['p_image'];
            $dt['p_description'] = $result['p_description'];
            $dt['p_price'] = $result['p_price'];
            $dt['c_id'] = $result['c_id'];
            $dt['s_id'] = $result['s_id'];
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_photo_gallery"){
        
        $query="SELECT * FROM `tbl_gallery_images`";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['img_id'] = $result['img_id'];
            $dt['img_title'] = $result['img_title'];
            $dt['img_desc'] = $result['img_desc'];
            $dt['img_path'] = $result['img_path'];
            $dt['img_date'] = $result['img_date'];
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_video_gallery"){
        
        $query="SELECT * FROM `tbl_video`";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['vid_id'] = $result['vid_id'];
            $dt['vid_title'] = $result['vid_title'];
            $dt['vid_desc'] = $result['vid_desc'];
            $dt['vid_path'] = $result['vid_path'];
            $dt['vid_date'] = $result['vid_date'];
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_activity"){
        
        $cur_year = preyear();
        
        $query="SELECT * FROM `tbl_activity`";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['activity_title'] = $result['activity_title'];
            $dt['activity_details'] = $result['activity_details'];
            $dt['activity_datetime'] = short_name($result['activity_datetime']);
         
            
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_log"){
        
        $cur_year = preyear();
        
        $query="SELECT * FROM `tbl_log` ";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['log_email'] = $result['log_email'];
            $dt['log_ip'] = $result['log_ip'];
            $dt['log_datetime'] = short_name($result['log_datetime']);
         
            
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_assets"){
        
        $query="SELECT * FROM `tbl_assets` where tbl_assets.is_delete=0 AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_assets`.assets_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
            
            $dt['sr_no'] = $id;
            $dt['assets_id'] = $result['assets_id'];
            $dt['assets_title'] = $result['assets_title'];
            $dt['assets_amount'] = $result['assets_amount'];
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            $dt['assets_details	'] = $result['assets_details'];
            $dt['assets_photo_path'] = $result['assets_photo_path'];
            $dt['assets_bill_path'] = $result['assets_bill_path'];
            $dt['assets_pur_date'] = $result['assets_pur_date'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_category"){
        
        $query="SELECT * FROM `tbl_category` where tbl_category.is_delete=0  order by `tbl_category`.category_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
           
            $dt['sr_no'] = $id;
            $dt['category_id'] = $result['category_id'];
            $dt['category_name'] = $result['category_name'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['device_type'] = $result['device_type'];
            $dt['menu_order'] = $result['menu_order'];
            
            if($result['is_income']=="i"){
                
                $income = "Yes";
            }else{
                
                $income = "No";
            }
            
            if($result['is_expense']=="e"){
                
                $expense = "Yes";
            }else{
                
                $expense = "No";
            }
            
            
            $dt['is_income'] = $income;
            $dt['is_expense'] = $expense;
        
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_company"){
        
        $query="SELECT * FROM `tbl_company` where tbl_company.is_delete=0 order by `tbl_company`.company_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $year  = get_results("SELECT * FROM `tbl_year` where year_id='{$result['year_id']}'");
          
            $dt['sr_no'] = $id;
            $dt['company_id'] = $result['company_id'];
            $dt['company_name'] = $result['company_name'];
            $dt['company_logo'] = $result['company_logo'];
            $dt['company_desc'] = $result['company_desc'];
            $dt['company_address'] = $result['company_address'];
            $dt['company_gst_no'] = $result['company_gst_no'];
            $dt['company_pancard'] = $result['company_pancard'];
            $dt['company_phone'] = $result['company_phone'];
            $dt['company_opening_balance'] = $result['company_opening_balance'];
            $dt['company_current_balance'] = $result['company_current_balance'];
            $dt['company_year_id'] = $result['company_year_id'];
            $dt['company_currancy'] = $result['company_currancy'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['device_type'] = $result['device_type'];
            $dt['year_name'] = $year['year_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_ledger"){
        
        $query="SELECT * FROM `tbl_ledger_master` where tbl_ledger_master.is_delete=0 order by `tbl_ledger_master`.ledger_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $company  = get_results("SELECT * FROM `tbl_company` where company_id='{$result['company_id']}'");
            $bank  = get_results("SELECT * FROM `tbl_bank_master` where bank_id='{$result['bank_id']}'");
          
            $dt['sr_no'] = $id;
            $dt['ledger_id'] = $result['ledger_id'];
            $dt['ledger_name'] = $result['ledger_name'];
            $dt['ledger_details'] = $result['ledger_details'];
            $dt['category_id'] = $result['category_id'];
            $dt['ledger_email'] = $result['ledger_email'];
            $dt['ledger_mobile'] = $result['ledger_mobile'];
            $dt['company_id'] = $result['company_id'];
            $dt['bank_id'] = $result['bank_id'];
            $dt['bank_account_no'] = $result['bank_account_no'];
            $dt['ledeger_ifsc_code'] = $result['ledeger_ifsc_code'];
            $dt['bank_branch_name'] = $result['bank_branch_name'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['device_type'] = $result['device_type'];
            
            $dt['category_name'] = $cat['category_name'];
            $dt['company_name'] = $company['company_name'];
            $dt['bank_name'] = $bank['bank_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_outstanding"){
        
        $query="SELECT * FROM `tbl_outstanding` where tbl_outstanding.is_delete=0 AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_outstanding`.outstanding_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
           
            $dt['sr_no'] = $id;
            $dt['outstanding_id'] = $result['outstanding_id'];
            $dt['is_debit_credit'] = $result['is_debit_credit'];
            $dt['outstanding_amount'] = $result['outstanding_amount'];
            $dt['outstanding_date'] = $result['outstanding_date'];
            $dt['outstanding_details'] = $result['outstanding_details'];
            $dt['outstanding_file_path'] = $result['outstanding_file_path'];   
            $dt['is_paid'] = $result['is_paid'] == "1" ? "Yes" : "No";
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['device_type'] = $result['device_type'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_recurring"){
        
        $query="SELECT * FROM `tbl_recurring_transaction` where tbl_recurring_transaction.is_delete=0 AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_recurring_transaction`.recurring_transaction_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
            $company  = get_results("SELECT * FROM `tbl_company` where company_id='{$result['company_id']}'");
            
                
            $dt['sr_no'] = $id;
            $dt['recurring_transaction_id'] = $result['recurring_transaction_id'];
            $dt['recurring_transaction_date'] = $result['recurring_transaction_date'];
            $dt['recurring_transaction_cycle'] = $result['recurring_transaction_cycle'];
            $dt['recurring_transaction_amount'] = $result['recurring_transaction_amount'];
            $dt['recurring_transaction_title'] = $result['recurring_transaction_title'];
            
            if($result['is_completed']=="0"){
                
                $status = "Not Complete";
                
            } else {
                
                $status = "Completed";
                
            }
            
            $dt['is_completed'] = $status;   
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['device_type'] = $result['device_type'];
            $dt['menu_order'] = $result['menu_order'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            $dt['company_name'] = $company['company_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_transaction"){
        
        $query="SELECT * FROM `tbl_transaction` where tbl_transaction.is_delete=0 AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_transaction`.transaction_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
           
            $dt['sr_no'] = $id;
            $dt['transaction_id'] = $result['transaction_id'];
            $dt['is_debit_credit'] = $result['is_debit_credit'];
            $dt['transaction_date'] = $result['transaction_date'];
            $dt['transaction_amount'] = $result['transaction_amount'];
            $dt['transaction_title'] = $result['transaction_title'];
            $dt['transaction_desc'] = $result['transaction_desc'];   
            $dt['cheque_no'] = $result['cheque_no'];
            $dt['cheque_date'] = $result['cheque_date'];
            $dt['transaction_online_code'] = $result['transaction_online_code'];
            $dt['receipt_upload'] = $result['receipt_upload'];
            $dt['company_bank_id'] = $result['company_bank_id'];
            $dt['transaction_sts'] = $result['transaction_sts'];
            $dt['year_id'] = $result['year_id'];
            $dt['company_id'] = $result['company_id'];
            $dt['transaction_entry_date'] = $result['transaction_entry_date'];
            $dt['transaction_by'] = $result['transaction_by'];
            $dt['is_cheque_cleared'] = $result['is_cheque_cleared'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['transaction_entry_by'] = $result['transaction_entry_by'];
            $dt['transaction_update_by'] = $result['transaction_update_by'];
            $dt['device_type'] = $result['device_type'];
            $dt['device_type'] = $result['device_type'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_year"){
        
        $query="SELECT * FROM `tbl_year` where tbl_year.is_delete=0 order by `tbl_year`.year_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
           
            $dt['sr_no'] = $id;
            $dt['year_id'] = $result['year_id'];
            $dt['year_name'] = $result['year_name'];
            
            $arr[] = $dt;
         
            
            
        }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_transaction_income"){
        
        $query="SELECT * FROM `tbl_transaction` where tbl_transaction.is_delete=0 AND is_debit_credit = 'credit' AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_transaction`.transaction_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
           
            $dt['sr_no'] = $id;
            $dt['transaction_id'] = $result['transaction_id'];
            $dt['is_debit_credit'] = $result['is_debit_credit'];
            $dt['transaction_date'] = $result['transaction_date'];
            $dt['transaction_amount'] = $result['transaction_amount'];
            $dt['transaction_title'] = $result['transaction_title'];
            $dt['transaction_desc'] = $result['transaction_desc'];   
            $dt['cheque_no'] = $result['cheque_no'];
            $dt['cheque_date'] = $result['cheque_date'];
            $dt['transaction_online_code'] = $result['transaction_online_code'];
            $dt['receipt_upload'] = $result['receipt_upload'];
            $dt['company_bank_id'] = $result['company_bank_id'];
            $dt['transaction_sts'] = $result['transaction_sts'];
            $dt['year_id'] = $result['year_id'];
            $dt['company_id'] = $result['company_id'];
            $dt['transaction_entry_date'] = $result['transaction_entry_date'];
            $dt['transaction_by'] = $result['transaction_by'];
            $dt['is_cheque_cleared'] = $result['is_cheque_cleared'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['transaction_entry_by'] = $result['transaction_entry_by'];
            $dt['transaction_update_by'] = $result['transaction_update_by'];
            $dt['device_type'] = $result['device_type'];
            $dt['device_type'] = $result['device_type'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_transaction_expense"){
        
        $query="SELECT * FROM `tbl_transaction` where tbl_transaction.is_delete=0 AND is_debit_credit = 'debit' AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_transaction`.transaction_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
           
            $dt['sr_no'] = $id;
            $dt['transaction_id'] = $result['transaction_id'];
            $dt['is_debit_credit'] = $result['is_debit_credit'];
            $dt['transaction_date'] = $result['transaction_date'];
            $dt['transaction_amount'] = $result['transaction_amount'];
            $dt['transaction_title'] = $result['transaction_title'];
            $dt['transaction_desc'] = $result['transaction_desc'];   
            $dt['cheque_no'] = $result['cheque_no'];
            $dt['cheque_date'] = $result['cheque_date'];
            $dt['transaction_online_code'] = $result['transaction_online_code'];
            $dt['receipt_upload'] = $result['receipt_upload'];
            $dt['company_bank_id'] = $result['company_bank_id'];
            $dt['transaction_sts'] = $result['transaction_sts'];
            $dt['year_id'] = $result['year_id'];
            $dt['company_id'] = $result['company_id'];
            $dt['transaction_entry_date'] = $result['transaction_entry_date'];
            $dt['transaction_by'] = $result['transaction_by'];
            $dt['is_cheque_cleared'] = $result['is_cheque_cleared'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['transaction_entry_by'] = $result['transaction_entry_by'];
            $dt['transaction_update_by'] = $result['transaction_update_by'];
            $dt['device_type'] = $result['device_type'];
            $dt['device_type'] = $result['device_type'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_recurring_income"){
        
        $query="SELECT * FROM `tbl_recurring_transaction` where tbl_recurring_transaction.is_delete=0 AND is_debit_credit = 'credit' AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_recurring_transaction`.recurring_transaction_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
            $company  = get_results("SELECT * FROM `tbl_company` where company_id='{$result['company_id']}'");
            
                
            $dt['sr_no'] = $id;
            $dt['recurring_transaction_id'] = $result['recurring_transaction_id'];
            $dt['recurring_transaction_date'] = $result['recurring_transaction_date'];
            $dt['recurring_transaction_cycle'] = $result['recurring_transaction_cycle'];
            $dt['recurring_transaction_amount'] = $result['recurring_transaction_amount'];
            $dt['recurring_transaction_title'] = $result['recurring_transaction_title'];
            
            if($result['is_completed']=="0"){
                
                $status = "Not Complete";
                
            } else {
                
                $status = "Completed";
                
            }
            
            $dt['is_completed'] = $status;   
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['device_type'] = $result['device_type'];
            $dt['menu_order'] = $result['menu_order'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            $dt['company_name'] = $company['company_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_recurring_expense"){
        
        $query="SELECT * FROM `tbl_recurring_transaction` where tbl_recurring_transaction.is_delete=0 AND is_debit_credit = 'debit' AND cr_year = '$current_year' AND firm_id = $firm order by `tbl_recurring_transaction`.recurring_transaction_id DESC";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            $id++;
            
            $cat  = get_results("SELECT * FROM `tbl_category` where category_id='{$result['category_id']}'");
            $ledger  = get_results("SELECT * FROM `tbl_ledger_master` where ledger_id='{$result['ledger_id']}'");
            $company  = get_results("SELECT * FROM `tbl_company` where company_id='{$result['company_id']}'");
            
                
            $dt['sr_no'] = $id;
            $dt['recurring_transaction_id'] = $result['recurring_transaction_id'];
            $dt['recurring_transaction_date'] = $result['recurring_transaction_date'];
            $dt['recurring_transaction_cycle'] = $result['recurring_transaction_cycle'];
            $dt['recurring_transaction_amount'] = $result['recurring_transaction_amount'];
            $dt['recurring_transaction_title'] = $result['recurring_transaction_title'];
            
            if($result['is_completed']=="0"){
                
                $status = "Not Complete";
                
            } else {
                
                $status = "Completed";
                
            }
            
            $dt['is_completed'] = $status;   
            $dt['insert_datetime'] = $result['insert_datetime'];
            $dt['modified_datetime'] = $result['modified_datetime'];
            $dt['is_active'] = $result['is_active'];
            $dt['is_delete'] = $result['is_delete'];
            $dt['device_type'] = $result['device_type'];
            $dt['menu_order'] = $result['menu_order'];
            
            
            $dt['category_name'] = $cat['category_name'];
            $dt['ledger_name'] = $ledger['ledger_name'];
            $dt['company_name'] = $company['company_name'];
            
            $arr[] = $dt;
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
    if($page=="get_todo"){
        
        $cur_year = preyear();
        
        $query="SELECT * FROM `tbl_todo` where tbl_todo.is_delete=0  order by `tbl_todo`.todo_id desc";
                                                                           
        $result = get_result($query);
        $arr = array();
        $id = 0;
        if(count($result) > 0) {
        foreach ($result as $result){
            
            $id++;
            $dt['sr_no'] = $id;
            $dt['todo_id'] = $result['todo_id'];
            $dt['todo_title'] = $result['todo_title'];
            $dt['todo_details'] = short_name($result['todo_details']);
            $dt['todo_date'] = $result['todo_date'];
            $dt['todo_time'] = $result['todo_time'];
            
            $arr[] = $dt;	
         }
        }
        # JSON-encode the response
        $json_response = json_encode($arr);
        // # Return the response
        echo $json_response;
    }
    
   
    	  
}