
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="site content">
    <meta name="author" content="site access">
    <meta name="keywords" content="site access request">

    <!-- Title Page-->
    <title>View</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../access/css/all.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor CSS-->
    <!-- <link href="vendor/date-picker/css/datepicker.min.css" rel="stylesheet" media="all"> -->
    <link rel="stylesheet" type="text/css" href="../../../access/css/style.css">

    <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all"> -->
    <link href="../../../access/vendor/bootstrap/css/bootstrap.css" rel="stylesheet" >

    <!-- Main CSS-->
    <!-- <link href="css/main.css" rel="stylesheet" media="all"> -->
</head>


<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "sar";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}


$id =$_GET['id'];
$query="SELECT * FROM site_access WHERE  deleted=0 AND id = $id";
    
  
// $query="SELECT * FROM site_access WHERE status = 0 AND status_2 = 0 AND id = 18";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
// var_dump($row);
echo($id);
foreach ($result as $row) {
  # code...
  $row['area_access'];
  $area_access=explode(",",$row['area_access']);
  // var_dump($area_access);

}

 $length = count($area_access);
  for ($i=0; $i < $length; $i++) { 
    # code..
    $vari = $area_access[$i];
    // echo "<br>";
    switch ($vari) {
    case 'Admin Buildings':
      $adminBuild = '<i class="fa fa-check text-primary"></i>';
      break;
    case ' Mine Camp Village':
       $mineCamp = '<i class="fa fa-check text-primary"></i>';
      break;
    case ' Environs':
      $env = '<i class="fa fa-check text-primary"></i>';
      break;
   
    case 'Active Mine Area':
      $mineArea = '<i class="fa fa-check text-primary"></i>';
      break;
    case 'Processing Plant Area':
      $plant = '<i class="fa fa-check text-primary"></i>';
      break;
    case 'Contractors Yard':
      $contractors = '<i class="fa fa-check text-primary"></i>';
      break;

    case 'Outside Perimeter Fence':
      $outside = '<i class="fa fa-check text-primary"></i>';
      break;

     case 'Warehouse':
      $warehouse = '<i class="fa fa-check text-primary"></i>';
      break;
    // case 'Environs':
    //   $env = '<i class="fa fa-check"></i>';
    //   break;


    default:
      # code...
      break;
  }

  }




// // explode
// $area_access=explode(",",$row['area_access']);
//   var_dump($area_access);
// $length = count($area_access);
// for ($i=0; $i < $length; $i++) { 
//   # code..
//   echo $vari = $area_access[$i];
//   echo "<br>";
// }
// echo $area_access[0];
  
  // echo $adminBuild; die();
?>
   


 <!-- <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="sm display-4">Site Access Form</h1>
    <p class="lead">Access Requests must be made 48 hours in advance of any visit or routine requirement. Any requests within this time limit risk being rejected.</p>
  </div>
</div> -->

<style type="text/css">
    .dr{
        background-color: #8B0000;
    }
</style>



    <body class="bg-primary bg-white">
    

               <div>
                    <div class="container">
                        <div class="row justify-content-center" >
                            <div class="col-lg-10">
                                <!-- Header -->
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="form-row">
                                            <span class="col-md-6"> <img src="../../../access/img/logo.jpg" width="200"></span>
                                           
                                           <div class="col-md-6 text-danger">
                                            <span class="float-right font-weight-bold">SITE ACCESS REQUEST</span><br>

                                            <span class="float-right mt-2">FORM</span>
                                            </div>
                                        </div>
                                        

                                        <hr class="mt-2">
                                          <span>Access Requests must be made 48 hours in advance of any visit or routine requirement. Any requests within this time limit risk being rejected.
                                          </span>
                                       <!--  <h4 class="text-center font-weight-light my-2">PERSONAL DETAILS</h4> -->
                                        
                                      
                                    </div>
                                    
                                </div>
                                <table border="1" cellpadding="5"  class="col-md-12 ">
                                    <thead>
                                        <tr>
                                        <td colspan="3" class="text-center dr text-white">PERSONAL DETAILS</td>
                                        </tr>
                                    </thead>
                                    
                                        <tr>
                                            <td colspan="3" height="50">Name: <span class="text-primary"> <?php  if (!empty($row['name'])){echo $row['name']; }else{echo "";} ?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="table-danger">Employee <?=(($row['class']=='Employee')?"<i class='fa fa-check-square float-right text-primary' style='font-size: 20px;'></i>":"")?></td>
                                            <td>Purpose of Access</td>
                                            <td>Date/s Required</td>
                                        </tr>
                                        <tr>
                                            <td class="table-danger">Contractor <?= (($row['class']=='Contractor')? "<i class='fa fa-check-square text-primary float-right' style='font-size: 20px;'></i>":"")?></td>
                                            <td rowspan="3" class="text-center"><span class="text-primary"><?php echo $row['purpose']?></span></td>
                                            <td rowspan="3" width="35%" class="text-center text-primary"><?php echo $row['start_date'].' to '. $row['end_date']?></td>
                                        </tr>
                                        <tr>
                                            <td class="table-danger">Visitor <?= (($row['class']=='Visitor')? "<i class='fa fa-check-square float-right text-primary' style='font-size: 20px;'></i>":"")?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-danger">Others <?= (($row['class']=='Others')? "<i class='fa fa-check-square float-right text-primary' style='font-size: 20px;'></i>":"")?>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                        <td colspan="3" class="text-center dr text-white">FEEDING/ACCOMMODATION REQUIREMENTS – “EDI-COM-FRM-003 MUST BE COMPLETED AND AUTHORIZED</td>
                                        </tr>
                                        <tr>
                                        <td colspan="3" class="text-center dr text-white">INDUCTION IS MANDATORY – NO EXCEPTIONS
                                        </td>
                                        </tr>
                                        <tr class="table-danger">
                                            <td colspan="3" class=" "> 
                                                
                                                <span class="float-left">
                                                <label class="mr-3 my-1">
                                                 FULL: <?= (($row['induction']=='full')? " &nbsp;<i class='fa fa-check-square float-right my-1 text-primary' style='font-size: 20px; '></i>":"")?>
                                               </label>
                                                <label>
                                                    <small> 
                                                        <i class="mr-3">(Book through&nbsp;pmgl.induction@perseusmining.co)</i>
                                                    </small>
                                                </label>
                                                </span>  
                                                
                                                <span class="float-right">
                                                <label class="mr-3 my-1"> 
                                                Visitor: <?= (($row['induction']=='visitor')? "&nbsp;<i class='fa fa-check-square float-right my-1 text-primary' style='font-size: 20px;'></i>":"")?>
                                                </label>
                                                

                                                 <label>
                                                 <small>
                                                    <i>(Completed at main site Security Gate)</i>
                                                </small>
                                                </label>
                                                </span>
                                             </td>                     
                                        </tr>
                                        <tr>
                                             <td colspan="3" class="text-center dr text-white">AREA ACCESS AUTHORISATION 
                                             </td>
                                        </tr>
                                      

                                        <tr>
                                            <td colspan="3" class="table-danger">
                                                <table border="1" cellpadding="5" class="col-md-10 mr-auto ml-auto table-danger">
                                                    <tr>
                                                        <thead class="text-center">
                                                            <td width="150">COLOUR</td>
                                                            <td>AREA AUTHORISED TO BE ACCESSED</td>
                                                            <td>TICK ACCESS AREAS REQUIRED</td>
                                                        </thead>
                                                    <tr>
                                                        <td bgcolor="white">white</td>
                                                        <td>Admin Buildings</td>
                                                        <td><?php  if (!empty($adminBuild)){echo $adminBuild; }else{echo "";} ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="grey">grey</td>
                                                        <td>Warehouse</td>
                                                        <td><?php if (!empty($warehouse)){echo $warehouse; }else{echo "";} ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="purple">purple</td>
                                                        <td>Mine Camp Village</td>
                                                        <td><?php if (!empty($mineCamp)){echo $mineCamp; }else{echo "";} ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="red">red</td>
                                                        <td>Active Mine Area (Pits) </td>
                                                        <td><?php if (!empty($active)){echo $active; }else{echo "";}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="orange">orange</td>
                                                        <td>Environs</td>
                                                        <td><?php if (!empty($env)){echo $env; }else{echo "";} ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="yellow">yellow</td>
                                                        <td>Processing Plant Area</td>
                                                        <td><?php if (!empty($plant)){echo $plant; }else{echo "";} ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="green">green</td>
                                                        <td>Outside Perimeter Fence Only</td>
                                                        <td><?php if (!empty($plant)){echo $plant; }else{echo "";} ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td bgcolor="blue">blue</td>
                                                        <td>Contractors Yard</td>
                                                        <td><?php if (!empty($contractors)){echo $contractors; }else{echo "";} ?></td>
                                                    </tr>

                                                </table>

                                            </td>

                                        <tr>
                                        <td colspan="3" class="text-center dr text-white">SIGNATURES</td>
                                        </tr>
                                       
                                        </tr>
                                       
                                </table>
                                 <table class="col-md-12 table-danger" border="1" cellpadding="5" >
                                 <thead>
                                   <tr>
                                     <th width="50%">HOD:</th>
                                     <th class="bg-white">SECURITY MANAGER:</th>
                                   </tr>
                                 </thead>
                                    <tr>
                                    <td colspan="3" class="text-center dr text-white">APPROVALS REQUIRED FOR CONTRACTORS
                                    </td>
                                  </tr>
                                
                                 </table>
                                <table border="1" class="col-md-12 font-weight-bold" cellpadding="5">
                                      <tr>
                                      <td width="45%">
                                        <small class="font-weight-bold">If direct PMGL contractor – PO number must be referenced and validity confirmed by Commercial</small> 
                                      </td>
                                      <td width="30%" class="font-weight-bold">
                                        PO Number:<span class="text-primary"> <?php if (!empty($row['po_num'])){echo $row['po_num']; }else{echo "";} ?></span>
                                       </td>
                                      <td width="30%" class="font-weight-bold">Valid: 
                                        <span class="col-md-6">Yes <?=(($row['valid']=='yes')?"<i class='fa fa-check-square text-primary' style='font-size: 20px;'></i>":"")?></span>
                                        <span class="col-md-6">No <?=(($row['valid']=='no')?"<i class='fa fa-check-square text-primary' style='font-size: 20px;'></i>":"")?></span><br><br>
                                        <small class="font-weight-bold">Commercial Rep to sign and date</small>

                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                        <small class="font-weight-bold">
                                          MINCOM Service Operating Permit (applies to all contractors on site unless specifically exempted) Receipt Number: 
                                        (copy to be attached if not already held by PMGL)
                                        </small>
                                  </td>
                                      <td colspan="2">
                                        Receipt Number: <span class="text-primary"><?php if (!empty($row['receipt_num'])){echo $row['receipt_num']; }else{echo "";} ?></span>
                                          <small class="font-weight-bold">
                                              <br>
                                            (copy to be attached if not already held by PMGL)

                                          </small>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="3" class="table-danger">
                                          <small>
                                              <ul>
                                                  <li>As part of the conditions to employment / visit, I will observe all Health and Safety Requirements, Mine Site and legal requirements. I will provide appropriate documentation outlining my qualifications to drive/operate equipment and will not do so unless legally authorized.
                                                  </li><br>
                                                  <li>
                                                  I understand that the badge is for access control and does NOT constitute a contract between PMGL and myself.  I understand that this badge is the property of PMGL and that I will return the badge to PMGL when requested to do so in order to receive my final Salary. Employees will incur a fine of GH¢ 100 and Contractors GH¢ 300 for each badge that is replaced or not returned on completion of the contract.
                                                  </li><br>
                                                  <li>
                                                  I understand that I must wear this badge visible between the shoulder and the waist at all times when I am on site, and immediately report a lost or stolen badge to the Security Department.
                                                  </li>
                                              </ul>
                                          </small>
                                                    <br>
                                                  <span class="ml-5">Signature: …………………………………………… </span>
                                                  <span class="float-right mr-5 mb-5">Date: …………………………..</span>
                                      </td>
                                  </tr>
                                 
                                    
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div></div>
                <div class="mb-5"></div>
                                  

<!-- <script type="text/javascript">
    function checkint(evt){
    var ch= String.fromCharCode(evt.which);
       if(!(/[0-9,.+/]/.test(ch))){
       alert('type in numbers only')
     env.preventDefault()
     }


    }
</script> -->


  


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/date-picker/js/datepicker.js"></script>
    <script src="vendor/date-picker/js/datepicker.en.js"></script>


    <script src="vendor/datepicker/daterangepicker.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>
<script type="text/javascript">
    $("input[type='checkbox']").change(function(e){
        if ($(this).is(":checked")){
            $(this).closest('tr').addClass("highlight_row");
        }
        else{
            $(this).closest('tr').removeClass("highlight_row");
        }
    });
</script>




</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->