<div id="page-wrapper">
  <div class="row">
    <div  class="col-lg-12">
     <?= form_open('c_school/updateSchool'); ?>
      <div class="table-responsive">           
        <table class="table table-hover">
          <tr><th class="text-center" colspan="2"><img  width="120" src="<?= base_url() ; ?>/assets/images/<?= $school_logo ;  ?>"></th></tr>
          <tr><th>School Name</th><td>
            <div>
                  <i  class="fa fa-pencil"></i> <input  type="text" class="form-control-plaintext" value="<?= $school_name ; ?>"  name="text_school">
          </td></tr>
            <tr><th>School City</th><td>
               <i  class="fa fa-pencil"></i> <input type="text" class="form-control-plaintext" value="<?= $school_city ; ?>"  name="text_city">
            </td></tr>
            <tr><th>School Year</th><td><?= $school_year ; ?></td></tr>
            <tr><td ><a href="<?= site_url('c_school/deleteSchool') ; ?>"  onClick="return confirm('I want to remove this school .');"  class="align-center  btn btn-danger"><i  class="fa fa-trash"></i> Delete</a></td>
              <td>
                <button   class="align-center  btn btn-info"><i  class="fa fa-pencil"></i> Update</button>
              </td>
            </tr>
        </table> 
      </div>
</form>
    </div>

  </div>

</div>