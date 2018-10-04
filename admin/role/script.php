<script>
function check_all(allid,classnm)
{
//    alert(1);
    var select_all = document.getElementById(allid); 
    if(select_all.checked == false){
        var title = "Unheck";
    }else{
        var title = "Check";
    }
//     swal({
//		title: "Are You Sure Want To "+ title +" All?",
////		text: "You will not be able to retrieve this record !",
//		type: "warning",
//		showCancelButton: true,
//		confirmButtonColor: '#DD6B55',
//		confirmButtonText: 'Yes!',
//                cancelButtonText: "No !",
//		closeOnConfirm: false
//	},
//	function(){
//		swal(title, "All "+ title, "success");
//                if(swal)
//                {
                    checkedd(select_all,classnm);
//                }
//	});


}
function checkedd(select_all,classnm)
{
    //select all checkbox
    var checkboxes = document.getElementsByClassName(classnm); //checkbox items
    //select all checkboxes
    select_all.addEventListener("change", function(e){
        for (i = 0; i < checkboxes.length; i++) { 
            checkboxes[i].checked = select_all.checked;
        }
    });


    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('change', function(e){ //".checkbox" change 
            //uncheck "select all", if one of the listed checkbox item is unchecked
            if(this.checked == false){
                select_all.checked = false;
            }
            //check "select all" if all checkbox items are checked
            if(document.querySelectorAll('.' + classnm + ':checked').length == checkboxes.length){
                select_all.checked = true;
            }
        });
    }
}

$('.rolechk').on('change',function() {
 
if ($('.rolechk').is(':checked')) {
    var id = $(this).attr('data-id');
    document.getElementById('viewchkbx' + id).checked = true;
} else {
  document.getElementById('viewchkbx' + id).checked = false;
}
 
});
$('.viewchk').on('change',function() {
    var id = $(this).attr('data-id');
    var select_all = document.getElementById('viewchkbx' + id); 
    if(select_all.checked == false){
      document.getElementById('elseviewchk1' + id).checked = false;      
      document.getElementById('elseviewchk2' + id).checked = false;      
      document.getElementById('elseviewchk3' + id).checked = false;      
      document.getElementById('elseviewchk4' + id).checked = false;      
    }

});



    </script>