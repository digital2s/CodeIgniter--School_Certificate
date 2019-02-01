<div class="text-center my-3 small">2018 &copy; School Certificate | AbdellWeb</div>
</div>


    <!-- Bootstrap core JavaScript -->
    <script src="<?=  base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=  base_url(); ?>/assets/vendor/popper/popper.min.js"></script>
    <script src="<?=  base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function() {
$("input[name=datalist_student]").keyup(function(event) {
event.preventDefault();
var input_student = $(this).val();
jQuery.ajax({
type: "POST",
url: "<?= base_url(); ?>" + "index.php/c_certificate/readCertificate",
dataType: 'json',
data: {json_student : input_student},
success: function(res) {
if (res)
{
$("#img").html('<img  width="80" src="<?= base_url() ; ?>/assets/images/'+res.s[0].student_img+'"    class="float-left">');
$("#lname").text(res.s[0].student_lname);
$("#fname").text(res.s[0].student_fname);
$("#staff_lname").text(res.s[0].staff_member_lname);
$("#staff_fname").text(res.s[0].staff_member_fname);
$("#speciality").text(res.s[0].speciality_label);
$("#degree").text(res.s[0].student_degree);

$("#school_city").text(res.s[0].school_city);
$("#school_year").text(res.s[0].school_year);

$("#responsable_fname").text(res.responsable[0].responsable_fname);
$("#responsable_lname").text(res.responsable[0].responsable_lname);
}
}

});
});
});
   



    </script>
 <script type="text/javascript">
     $(function(){
        
        $('#modal').modal();
  
$("#selectAll").change(function(){  //"select all" change 
    var status = this.checked; // "select all" checked status
    $('.checkbox').each(function(){ //iterate all listed checkbox items
        this.checked = status; //change ".checkbox" checked status        
    });
});

$("button#delete").click(function(){ 
  if($('.checkbox:checked').length==0){ //if this item is unchecked
        alert('Please, check a checkbox !');
        return false;
    }else{
        confirm('I want to remove this/these speciality(ies) .');
    }
});
  


    $('.checkbox').on('click', function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#selectAll').prop('checked',true);
        }else{
            $('#selectAll').prop('checked',false);
        }
    });


     });


 </script>

  </body>

</html>
