  <div class="container " > 


<div class="row content">

       
          
           
    <a  href="<?php echo site_url(); ?>"  class="button button-purple mt-12 pull-right">View Student List</a> 
     
 <h3>View Student Info ||    <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?></h3>
       
    
     <hr/>
   
   
 
      
    <label >Name:</label>
   <?php  if(isset($student_info['student_name'])){echo $student_info['student_name']; }?>

<br/>
    <label>Email address:</label>
  <?php  if(isset($student_info['email_address'])){echo $student_info['email_address'];} ?>
    
    <br/>
    <label >Contact:</label>
      <?php  if(isset($student_info['contact'])){echo $student_info['contact'];} ?>
    <br/>

  <label >Gender:</label>
   <?php  if(isset($student_info['gender'])){echo $student_info['gender'];} ?>
  <br/>
    <label >Country:</label>
      <?php  if(isset($student_info['country'])){echo $student_info['country'];} ?>
    <br/>

          

    <a href="<?php echo site_url('update-student-info').'/'.$student_info['student_id'];?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
  </div>