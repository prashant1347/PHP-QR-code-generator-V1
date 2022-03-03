<?php
 $api='https://chart.googleapis.com/chart?';
 if(isset($_POST['submit'])){
   $height = $_POST['height'];
   $width = $_POST['width'];
   $data = $_POST['data'];
   $api = 'https://chart.googleapis.com/chart?cht=qr&chs='.$width.'x'.$height.'&chl='.$data;
  $dat["img"] =  $api ;

 } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>QR code generator</title>
  </head>
  <body>
  <?php if(isset($dat)){  ?>
        
        <div class="img ">
          <img src="<?php echo$dat["img"]?>" width="10%" height="10%" >
        </div>
        
        <?php } ?>
    
    <div class="container">
        <h1 class="text_wrap"> QR Code Generator</h1>
     
      
    <form class="row  needs-validation"  action="index.php" method="POST">
   
      
        <div class="col-md-10">
          <label for="validationCustom03" class="form-label ">Data:</label>
          <input type="text" class="form-control" id="validationCustom03" placeholder="EX:12345" name ="data"required>
         
        </div>
        <br/>
        <div class="col-md-5 my-3">
            <label for="validationCustom05" class="form-label">Height:</label>
            <input type="number" class="form-control" id="validationCustom05" placeholder="250px" name="height" required>
            
          </div>
        
        
        <div class="col-md-5 my-3" >
          <label for="validationCustom05" class="form-label">Width:</label>
          <input type="number" class="form-control" id="validationCustom05" name="width" placeholder="250px" required>
          
        </div>
        <div class="col-12">
          
        <div class="col-12">
          <button class="btn btn-success " type="submit" name="submit">Generate!</button>
        </div>
     
      </div>  
  
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
       *{
           box-sizing: border-box;
           font-family: Montserrat;
       }
      .container{
          
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 100px;

         height: 42vh;
        width: 500px;
        box-shadow: -3px 8px 33px -3px rgba(94, 91, 91, 0.75);
        -webkit-box-shadow: -3px 8px 33px -3px rgba(94, 91, 91, 0.75);
        -moz-box-shadow: -3px 8px 33px -3px rgba(94, 91, 91, 0.75);
        padding-top: 20px;
        padding-bottom: 20px;
        border-radius: 20px;
        background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);


      }
      .text_wrap{
        
        font-size: 35px;
        margin-left: 5px;
      
        
      
        color: white;
      }
      .needs-validation {
          padding-left: 30px;
      }
      label{
          color: white;
      }
 
  </style>
</html>