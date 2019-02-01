  <?php if (!isset($school_id)) : ?>
<?= form_open_multipart('c_school/validFormAddSchool'); ?>
   <?php else : ?>
                          <?= form_open('c_school/validFormUpdateSchool'); ?>

                  <?php endif; ?>
 <?= $error ; ?> 
  <div class="form-group">
    <label for="school">School Name</label>
    <input type="text"  name="text_school" class="form-control" id="school" 

    value="<?php if (isset($school_id)) : ?><?= set_value('text_school', $school_name) ;?>        <?php endif; ?>" 

     />
    <?= form_error('text_school');?>  
  </div>
  <div class="form-group">
    <label for="city">School City</label>
    <input type="text"  name="text_city" class="form-control" id="city"

        value="<?php if (isset($school_id)) : ?><?= set_value('text_city', $school_city) ;?>        <?php endif; ?>" 

      />
    <?= form_error('text_city');?>  
  </div>
  <div class="form-group">
    <label for="year">School Year</label>
    <div  class="form-inline">
    <input type="number"  name="number_year1"  onFocus="this.value='2018';" min="2018"  class="form-control  col-lg-5" id="year"><span class="col-lg-2 text-center">/</span><input onFocus="this.value='2019';"  min="2018" name="number_year2" type="number" class="form-control  col-lg-5" id="city">
    </div>
         <?= form_error('number_year1');?>  <?= form_error('number_year2');?>  
  </div>
  <div class="form-group">
    <label for="logo">School Logo</label>
    <input type="file" class="form-control" id="logo"  name="file_logo">
         <?= form_error('file_logo');?>  
  </div>
  <button type="submit" class="btn btn-primary">
      <?php if (isset($school_id)) : ?> Update  <?php else: ?> Create the school <?php endif; ?>
  </button>
</form>