<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DSS</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  
  <body>
    <h1 class="header">Hello farmer and welcome to our depression detector!</h1>
    <h2 class="subheader">Please answer the following questions:</h2>

    <article class="big-box">
      <form method="post" >      
        <div class="box">
          <p>Are you a male or a female?</p>
          <label>
            <input type="radio" name="sex" value="man"/>
            <span class="yes">Man</span>
          </label>
          <label>
            <input type="radio" name="sex" value="woman" />
            <span class="no">Woman</span>
          </label>
        </div>
        <div class="box">
          <p>Are you married?</p>
          <label>
            <input type="radio" name="married" value="yes" />
            <span class="yes">Yes</span>
          </label>
          <label>
            <input type="radio" name="married" value="no" />
            <span class="no">No</span>
          </label>
        </div>
        <div class="box">
          <p>Do you have a salary of your own?</p>
          <label>
            <input type="radio" name="salary" value="yes" />
            <span class="yes">Yes</span>
          </label>
          <label>
            <input type="radio" name="salary" value="no" />
            <span class="no">No</span>
          </label>
        </div>
        <div class="box">
          <p>Do you own a farm?</p>
          <label>
            <input type="radio" name="farm" value="yes" />
            <span class="yes">Yes</span>
          </label>
          <label>
            <input type="radio" name="farm" value="no" />
            <span class="no">No</span>
          </label>
        </div>
        <div class="box">
          <p>you own a bussiness?</p>
          <label>
            <input type="radio" name="bussiness" value="yes" />
            <span class="yes">Yes</span>
          </label>
          <label>
            <input type="radio" name="bussiness" value="no" />
            <span class="no">No</span>
          </label>
        </div> 
        <input type="submit" name="Submit1" value="Submit!" />
      </form>   
    </article>


    <div class="depressed">
      <h1>
        <p>
          According to your answers, you are most likely: <br />
          <br />
          <span class="red">DEPRESSED</span>
          <br />
          <br />
          <span class="doctor">
            Our results are probabilistic, for more accurate results please
                visit your doctor!</span
              >
        </p>
      </h1>
    </div>

    <br />
    <div class="not-depressed">
      <h1>
        <p>
          According to your answers, you are most likely: <br />
          <br />
          <span class="green">NOT DEPRESSED</span>
          <br />
          <br />
          <span class="doctor">
            Our results are probabilistic, for more accurate results please
                visit your doctor!</span
              >
            </p>
      </h1>
    </div>
      
    
  </body>
</html>

<?php
  

  if (isset($_POST['Submit1'])) {
    if(isset($_POST['sex']) and isset($_POST['married']) and isset($_POST['salary']) and isset($_POST['farm']) and isset($_POST['bussiness'])){

      $sex = $_POST['sex'];
      $married = $_POST['married'];
      $salary = $_POST['salary'];
      $farm = $_POST['farm'];
      $bussiness = $_POST['bussiness'];
      $result = "no";

      
 
      if($salary == "no"){
        if($farm == "no"){
          if($married == "no"){
            if($sex == "woman"){
              $result = "no";
            }
            else{
              $result = "yes";
              
            }
          }
          else{
            $result = "no";
          }
        }
        else{
          if($married == "no"){
            $result = "no";
          }
          else{
            $result = "yes";
          }
        }
      }
      else{
        if($sex == "woman"){
          $result = "no";
        }
        else{
          $result = "yes";
        }
      }

      
      if($result == "no"){
        echo '<style>.not-depressed { visibility: visible;}</style>';
      }
      else{
        echo '<style>.depressed { visibility: visible;}</style>';
      }

      

      //telos montelou
      



    }
    
  }    // telos elegxon

  ?>
