<div class="row">
    <div class="col-md-12">
<div class="chnghfirm"></div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/classie/js/classie.js"></script>
<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/form-validation/validate.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/form-validation/form-validation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/js/script.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/js/demo-12.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/js/jquery.mousewheel.min.js"></script>

<script src="<?php echo base_url(); ?>admin/assets/toast-master/js/jquery.toast.js"></script>
<script src="<?php echo base_url(); ?>admin/assets/sweetalert/sweetalert.js" type="text/javascript"></script>

<script>
    
    $('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    changeMonth: true,
    changeYear: true
    
 });

jQuery(document).ready(function() {
        
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
         
});
function success_alert(data){
      $.toast({
        heading: data,
        position: 'top-right',
        icon: 'success',
        hideAfter: 3500, 
        stack: 6
      });
}
function danger_alert(data){
      $.toast({
        heading: data,
        position: 'top-right',
        icon: 'warning',
        hideAfter: 3500, 
        stack: 6
      });
}
function active_deactive(uid,pagename,checkbox_val,table,where,field) {

          
        var Val = ($(checkbox_val).is(':checked')) ? 1 : 0;
 
        $.ajax({
        type: "post",
        url: "<?php echo base_url(). "ajax/ajax_fun.php"; ?>",
        data: {active_val: Val, id: uid, page_name: pagename,table:table,where:where,field:field,page:"active_deactive"},
        cache: false,
        async: false,
        //dataType: "text",
        success: function (data) {

        success_alert(data);
        }
        });

}
<?php
if(isset($_GET['success']))
{
    if($_GET['success']==1)
    {
        ?>
            success_alert("<?php echo $_GET['msg']; ?>");
        <?php        
    }else{
    ?>
            danger_alert("<?php echo $_GET['msg']; ?>");
    <?php
    }
}
?>
function delete_record(table_name,field_name,id,is_ref,activity_name)
{
   
     swal({
		title: "Are You Sure Want To Delete This Record?",
//		text: "You will not be able to retrieve this record !",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'Yes, Reset!',
                cancelButtonText: "No !",
		closeOnConfirm: false
	},
	function(){
		swal("Deleted!", "Record Has Been Deleted", "success");
                if(swal)
                {
                    $.ajax({
                        url: '<?php echo base_url(); ?>ajax/ajax_fun.php', // point to server-side controller method
                        cache: false,
                        type: 'post',
                        data: {table_name: table_name,field_name: field_name,id: id,activity_name:activity_name,page:'delete'},

                        success: function (response) {
                            if(is_ref==1){
                                success_alert("Record Has Been Deleted");
                                setTimeout(function () {
                                    location.reload();
                                 }, 3000);
                                
                            }else{
                             $('#row_' + id).hide(1000);
                                success_alert("Record Has Been Deleted");
                            }
                         },
                        error: function (response) {
                             
                        }
                    });
                }
	});
}
function goBack() {
    window.history.go(-2);
}
function redirect(url){
    window.location=url;
}
<?php
if(!isset($_SESSION['current_firm_id']) || !isset($_SESSION['current_preyear']) || empty($_SESSION['current_firm_id']) || empty($_SESSION['current_preyear'])){
    ?>
change_firm();
<?php
}
?>
$('.change_firmpreyear').click(function(){
    change_firm();
});
function change_firm()
{
    $.post('<?php echo base_url()."firm/change-firm.php"; ?>',{page:'1'},function(data){
         $('.chnghfirm').empty();   
         $('.chnghfirm').html(data);   
    });
//    $('#firmprtypreyear').modal({backdrop: 'static', keyboard: false});
}
 
 
</script>

<script src="<?php echo base_url(); ?>admin/jquery/jquery.validate.js" type="text/javascript"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script>
$().ready(function () {
        $("#myform").validate();
        
});



   
$('input.number').keyup(function(event) {

  // skip for arrow keys
  if(event.which >= 37 && event.which <= 40) return;

  // format number
  $(this).val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
});

</script>