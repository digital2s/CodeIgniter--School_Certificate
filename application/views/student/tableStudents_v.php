<?= form_open('c_student/deleteStudent'); ?> 
<div id="page-wrapper">
  <div class="row">
    <?= $error; ?>

    <div  class="col-lg-12">
     
      <div class="table-responsive">           
        <table class="table table-hover">
          <thead>
            <tr>
            <th>#</th>
             <th>Student</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Speciality</th>
            <th>Degree</th>
            <th>Staff Member First Name </th>
            <th>Staff Member Last Name</th>
             <th ><a title="Edit" ><i  class="fa fa-pencil  text-warning"></i></a></th>
             <th><a onClick="return confirm('I want to remove all students .');"   href="<?= site_url('C_Student/deleteStudent') ; ?>" title="Delete All" ><i  class="fa fa-trash  text-danger"></i></a></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($students as  $student): ?>
              <tr>
                <td><?= $id_student = $student->student_id ;  ?></td>
                    <td><img  width="70" src="<?= base_url(); ?>/assets/images/<?= $student->student_img ;  ?>"
                          alt="<?= $student->student_lname ;  ?>"  title="<?= $student->student_lname ;  ?>"
                      >


                    </td>
                <td  id="fname"><?= $student->student_fname ;  ?></td>
                  <td><?= $student->student_lname ;  ?></td>
                    <td><?= $student->speciality_label ;  ?></td>
                      <td><?= $student->student_degree ;  ?></td>
                        <td><?= $student->staff_member_fname ;  ?></td>
                          <td><?= $student->student_lname ;  ?></td>
                <td><a href="<?= site_url('C_Student/updateStudent/'.$id_student) ; ?>"><i  class="fa fa-pencil  text-warning"></i></a></td>
                <td><a onClick="return confirm('I want to remove this student .');" href="<?= site_url('C_Student/deleteStudent/'.$id_student) ; ?>" title="Delete" ><i  class="fa fa-trash  text-danger"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

             
      </div>

    </div>

  </div>

</div>
</form>

    <button  style="  
      position: fixed;
      bottom: 25px;
      right: 140px;  border-radius: 20px" data-toggle="modal" data-target="#exampleModal" data-whatever=""  type="button" name=""  class="pull-right  btn btn-danger"><i  class="fa fa-plus"></i> </button>

  <?= form_open_multipart('c_student/createStudent'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                

      
        <div class="form-group">
    <label for="formGroupExampleInput">First name</label>
    <input type="text"  name="text_fname" class="form-control"  id="fname"   placeholder="">
    <?= form_error('text_fname');  ?>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Last name</label>
     <input type="text" name="text_lname" class="form-control" id="formGroupExampleInput"
 
      placeholder="">
        <?= form_error('text_lname');  ?>
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">Year</label>
     <select  name="select_year"   class="form-control" id="formGroupExampleInput2" >
       <option>1</option>
           <option>2</option>
               <option>3</option>
     </select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Speciality</label>
       <select name="select_speciality" id="formGroupExampleInput" class="form-control">
     <?php foreach($specialities  as $key=>$value) : ?>
                        <option value="<?= $key; ?>">
                            <?= $value; ?>
                        </option>
                    <?php endforeach; ?>
</select>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Staff Member First Name</label>
     <input type="text"  name="text_staff_member_fname" class="form-control" id="formGroupExampleInput"
 
      placeholder="">
        <?= form_error('text_staff_member_fname');  ?>
  </div>

    <div class="form-group">
    <label for="formGroupExampleInput2">Staff Member Last Name</label>
     <input type="text"  name="text_staff_member_lname" class="form-control" id="formGroupExampleInput"
 
      placeholder="">
       <?= form_error('text_staff_member_lname');  ?>
  </div>

      <div class="form-group">
    <label for="formGroupExampleInput5">Picture</label>
     <input type="file"  name="file_picture" class="form-control" id="formGroupExampleInput5"
 
      placeholder="">
        <?= form_error('file_picture');  ?>
  </div>
  


      </div>
      <div class="modal-footer">
        
   <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Create</button>   <button onClick="" type="reset" class="btn btn-info"><i class="fa fa-eraser"></i> Reset</button>
      </div>
    </div>
  </div>
</div>
</form>