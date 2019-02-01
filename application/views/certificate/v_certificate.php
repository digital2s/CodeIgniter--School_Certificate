<div  id="certificate">


<img  width="80" src="<?= base_url() ; ?>/assets/images/<?= $s['student_img'] ;  ?>"    class="float-left"><h1 class="display-3  text-center">Certificate Of School</h1>
<p  class="lead  text-center">For the school year <strong> <?= $school->school_year ;  ?></strong></p>

<p class="lead">This is to certify that<strong> <?= $s['student_fname'] ;  ?> <?= $s['student_lname'] ;  ?></strong></p>

 <p  class="lead">son/daughter of<strong> <?= $s['staff_member_fname'] ;  ?> <?= $s['staff_member_lname'] ;  ?> </strong></p>


 <p  class="lead">was in full time attendance at <strong> <?= $s['speciality_label'] ;  ?> </strong>speciality</p>
 
  <p  class="lead">and regulary attended class in the <strong> <?= $s['student_degree'] ;  ?> </strong> grade</p>

<br />
<p  class="lead  pull-right">Signature :<span style="font-family: tahoma"><strong> <?= $responsable->responsable_lname ;  ?> <?= $responsable->responsable_fname ;  ?></strong></span></p>
<p>
Date :
<strong><?php

$format = ' %Y - %m - %d';
echo mdate($format);


?>
</strong>
</p><p>
Place : <strong> <?= $school->school_city ; ?> </strong>
</p>





</div>
<style type="text/css">
	#certificate {
		font-size : 20px;
	}
</style>