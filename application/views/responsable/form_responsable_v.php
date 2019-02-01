<?= form_open('c_responsable/validFormUpdateResponsable'); ?>
        <div>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Account</h5>
        
      </div>
      <div class="modal-body">

           

  <div class="form-group">
    <label for="school">First Name</label>
    <input type="text"  name="text_fname" class="form-control" id="school" 

 value="<?= set_value('text_fname', $responsable_fname) ;?>  " 

     />


     
    <?= form_error('text_school');?>  
  </div>

    <div class="form-group">
    <label for="school">Last Name</label>
    <input type="text"  name="text_lname" class="form-control" id="school" 

 value="<?= set_value('text_fname', $responsable_lname) ;?>  " 

     />


     
    <?= form_error('text_school');?>  
  </div>

    <div class="form-group">
    <label for="school">Email</label>
    <input type="text"  name="text_email" class="form-control" id="school" 

 value="<?= set_value('text_email', $responsable_email) ;?>  " 

     />


     
    <?= form_error('text_school');?>  
  </div>


  <div class="form-group">
    <label for="school">Login</label>
    <input type="text"  name="text_login" class="form-control" id="school" 

 value="<?= set_value('text_login', $responsable_login) ;?>  " 

     />


     
    <?= form_error('text_school');?>  
  </div>

  <div class="form-group">
    <label for="school">Password</label>
    <input type="text"  name="text_pw" class="form-control" id="school" 

 value="<?= set_value('text_pw', $responsable_pw) ;?>  " 

     />


     
    <?= form_error('text_school');?>  
  </div>

 
  <button type="submit" class="btn btn-primary"><i  class="fa fa-save"></i>
     Update
  </button>
</div></div></div></div>
</form>