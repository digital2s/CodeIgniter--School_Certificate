<br />
<?=  form_open('c_certificate/generatePDF'); ?>
	<div  class="row">
<div  class="col-lg-11">

  <div class="input-group">
     
    <button type="submit" class="input-group-addon" id="basic-addon1"><b class="fa fa-search"></b></button>
  
    <input list="browsers"  name="datalist_student"  class="form-control"  autofocus />
    <datalist id="browsers">
               <?php foreach ($students as  $student): ?>
      <option value="<?= $student->student_fname ;  ?>">
      </option>
                 <?php endforeach ; ?>
    </datalist>
  </div>

</div>
<div  class="col-lg-1 ">
<button type="submit"    class="btn btn-info px-3">PDF</button>
</div>
</div>
</form>

<header class="jumbotron my-4  py-7  "  style="height: 510px">
<span id="img"></span>
<h3 class="display-4  text-center">Certificate Of School</h3>
<p  class="lead  text-center">For the school year <b id="school_year">____ _____</b></p>
<br />
<p class="lead">This is to certify that <b id="fname">_______</b> <b  id="lname">_________</b></p>
<p  class="lead">son/daughter of <b id="staff_fname">_________________________________________</b> <b  id="staff_lname">____________________________________</b></p>
<p  class="lead">was in full time attendance at <b  id="speciality">__________________________________________________________________</b> speciality</p>
<p  class="lead">and regulary attended class in the <b  id="degree">____________________________________________________________ </b> grade</p><br />
<p  class="lead  pull-right">Signature <b  id="responsable_fname">___________</b> </b> <b  id="responsable_lname">__________</b><br />
Date <b> <?php

$format = ' %Y - %m - %d';
echo mdate($format);


?></b><br />
Place <b id="school_city">___________</b></p>

</header>

<style type="text/css">
  /* Diagonal stacked jumbotron effect */
.jumbotron {
 
  /* Need position to allow stacking of pseudo-elements */
  position: relative;
  /* Padding for demo purposes */
  padding: 30px;
  background: #fff;

}

.jumbotron,
.jumbotron::before {

   box-shadow:0 0 20px rgba(0,0,0,0.1);
}

.jumbotron::before,
.jumbotron::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #eee;
}

/* Second sheet of jumbotron */
.jumbotron::before {
  left: 7px;
  top: 5px;
  z-index: -1;
}

/* Third sheet of jumbotron */
.jumbotron::after {
  left: 12px;
  top: 10px;
  z-index: -2;
}
</style>