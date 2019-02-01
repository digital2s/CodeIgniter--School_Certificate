<?= form_open('c_speciality/deleteSpeciality'); ?> 
<div id="page-wrapper">
  <div class="row">
   
    <div  class="col-lg-12">
     
      <div class="table-responsive">           
        <table class="table table-hover">
          <thead>
            <tr>
            <th>#</th>
             <th>Speciality</th>
            
             <th ><a  class="btn" title="Edit" ><i  class="fa fa-pencil "></i></a></th>
             <th><input id="selectAll" title="Select All" type="checkbox" name="checkbox_department"  value=""></th>
             <th>
              <?php  if (count($specialities)==0): ?>
                        <button  disabled  type="submit" id="delete"  class="pull-right  btn btn-danger"><i  class="fa fa-trash"></i> </button>
                      <?php  else:  ?> 
 <button   type="submit" id="delete"  class="pull-right  btn btn-danger"><i  class="fa fa-trash"></i></button>

               <?php  endif;  ?>
              

            </th>
             <th> <button data-toggle="modal" data-target="#exampleModal" data-whatever=""  type="button" name=""  class="pull-right  btn btn-info"><i  class="fa fa-plus"></i> </button></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($specialities as  $speciality): ?>
              <tr>
                <td><?= $id_speciality = $speciality->speciality_id ;  ?></td>
                <td><?= $speciality->speciality_label ;  ?></td>
                <td><a  class="btn btn-info" href="<?= site_url('C_Speciality/updateSpeciality/'.$id_speciality) ; ?>"><i  class="fa fa-pencil"></i></a></td>
                <td><input class="checkbox" type="checkbox" name="checkbox_speciality[]"  value="<?= $id_speciality ; ?>"></td>
                <td></td>
                 <td></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

             
      </div>

    </div>

  </div>

</div>
</form>



  <?= form_open('c_speciality/createSpeciality'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Speciality</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                

      
        <div class="form-group">
    <label for="formGroupExampleInput">Speciality</label>
    <input type="text"  name="text_speciality" class="form-control"  id=""   placeholder="">
    <?= form_error('text_speciality');  ?>
  </div>
  

      </div>
      <div class="modal-footer">
        
   <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Create</button>   <button onClick="" type="reset" class="btn btn-info"><i class="fa fa-eraser"></i> Reset</button>
      </div>
    </div>
  </div>
</div>
</form>