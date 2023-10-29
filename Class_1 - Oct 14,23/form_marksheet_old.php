<?php
$sindhi = 0;
$urdu = 0;
$englishI = 0;
$englishII = 0;
$islamiyat = 0;
$ps = 0;
$physics_T = 0;
$physics_P = 0;
$chem = 0;
$chem_P = 0;
$math = 0;
$bio_T = 0;
$bio_P = 0;
$percentage = 0.0;
$obtained_marks = 0;
$total_marks = 850;
$grade = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Marksheet</title>
</head>
<body>
    <form action="#" method="post">
        <div class="container">
            <div class="row g-3 align-items-center">
            <h1 style="color: green; padding: 20px; text-align: center;">MARKSHEET FORM</h1>
            <div class="col">
                <label for="sindhi_Marks" class="col-form-label">Sindhi : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="sindhi" name="sindhi" class="form-control obtainedTotal" aria-describedby="passwordHelpInline">
            </div>
            <div class="col">
                <label for="urdu_Marks" class="col-form-label">Urdu : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="urdu" name="urdu" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="englishI_Marks" class="col-form-label">English-I : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="englishI" name="englishI" class="form-control obtainedTotal">
            </div>
            </div>
        <div class="row g-3 align-items-center">
            <div class="col">
                <label for="englishII_Marks" class="col-form-label">English-II : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="englishII" name="englishII" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="islamiyat_Marks" class="col-form-label">Islamiyat : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="islamiyat" name="islamiyat" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="ps_Marks" class="col-form-label">Pakistan Studies : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="ps" name="ps" class="form-control obtainedTotal">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col">
                <label for="physics_T_Marks" class="col-form-label">Physics_Theory : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="physics_T" name="physics_T" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="physics_P_Marks" class="col-form-label">Physics_Practical : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="physics_P" name="physics_P" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="chem_Marks" class="col-form-label">Chemistry_Theory : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="chem" name="chem" class="form-control obtainedTotal">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col">
                <label for="chem_P_Marks" class="col-form-label">Chemistry_Practical : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="chem_P" name="chem_P" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="math_Marks" class="col-form-label">Mathematics : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="math" name="math" class="form-control obtainedTotal">
            </div>
            <div class="col">
                <label for="bio_T_Marks" class="col-form-label">Biology_Theory : </label>
            </div>
            <div class="col">
                <input type="number" min="0" max="100" id="bio_T" name="bio_T" class="form-control obtainedTotal">
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-2">
                <label for="bio_P_Marks" class="col-form-label">Biology_Practical : </label>
            </div>
            <div class="col-2">
                <input type="number" min="0" max="100" id="bio_P" name="bio_P" class="form-control obtainedTotal">
            </div>
            <div class="col-6">
                <button type="submit" name="submit" class="btn btn-primary">Generate Result</button>
            </div>
        </div>
        <div class="row g-3 align-items-center">
            <div class="col-2" style="padding:10px; margin:10px;">
                <label for="">Obtained Marks:</label>
                <input type="number" min="0" max="100" id="obtainedMarks" class="obtainedMarks" disabled>
            </div>
            <div class="col-2" style="padding:10px; margin:10px;">
                <label for="">Total Marks</label>
                <input type="number" min="0" max="100" value="<?= $total_marks;?>" disabled>
            </div>
        </div>
    </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



<?php

    if(isset($_POST['submit']))
    {
        $sindhi = $_POST['sindhi'];
        $urdu = $_POST['urdu'];
        $englishI = $_POST['englishI'];
        $englishII = $_POST['englishII'];
        $islamiyat = $_POST['islamiyat'];
        $ps = $_POST['ps'];
        $physics_T = $_POST['physics_T'];
        $physics_P = $_POST['physics_P'];
        $chem = $_POST['chem'];
        $chem_P = $_POST['chem_P'];
        $math = $_POST['math'];
        $bio_T = $_POST['bio_T'];
        $bio_P = $_POST['bio_P'];

        if((isset($sindhi) && !empty($sindhi)) && (isset($urdu) && !empty($urdu)) && (isset($englishI) && !empty($englishI))
        && (isset($englishII) && !empty($englishII)) && (isset($islamiyat) && !empty($islamiyat)) && (isset($ps) && !empty($ps))
        && (isset($physics_T) && !empty($physics_T)) && (isset($physics_P) && !empty($physics_P)) && (isset($chem) && !empty($chem))
        && (isset($chem_P) && !empty($chem_P)) && (isset($math) && !empty($math)) && (isset($bio_T) && !empty($bio_T)) && (isset($bio_P) && !empty($bio_P)))
        {  
            $obtained_marks =   $sindhi+$urdu+$englishI+$englishII+$islamiyat+$ps+$physics_T+$physics_P+$chem+$chem_P+$math+$bio_T+$bio_P;
            $percentage = ($obtained_marks/$total_marks)*100;
            if((int)$percentage >= 80)
            {
                $grade = "A";
            }elseif((int)$percentage>=70)
            {
                $grade = "B";
            }elseif((int)$percentage>=60)
            {
                $grade = "C";
            }else{
                $grade = "F";
            }

?>
<br><br><hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <table class="table">
                    <thead>
                        <tr>
                            <th>SUBJECTS</th>
                            <th>MAXIMUM MARKS</th>
                            <th>MINIMUM MARKS</th>
                            <th>OBTAINED MARKS</th>
                        </tr>
                        <tr>
                            <td>Sindhi</td>
                            <td>75</td>
                            <td>25</td>
                            <td><?php echo $sindhi;?></td>
                        </tr>
                        <tr>
                            <td>Urdu</td>
                            <td>75</td>
                            <td>25</td>
                            <td><?php echo $urdu;?></td>
                        </tr>
                        <tr>
                            <td>English-I</td>
                            <td>75</td>
                            <td>25</td>
                            <td><?php echo $englishI;?></td>
                        </tr>
                        <tr>
                            <td>English-II</td>
                            <td>75</td>
                            <td>25</td>
                            <td><?php echo $englishII;?></td>
                        </tr>
                        <tr>
                            <td>Islamiyat</td>
                            <td>75</td>
                            <td>25</td>
                            <td><?php echo $islamiyat;?></td>
                        </tr>
                        <tr>
                            <td>Pakistan Studies</td>
                            <td>75</td>
                            <td>25</td>
                            <td><?php echo $ps;?></td>
                        </tr>
                        <tr>
                            <td>Physics_Theory</td>
                            <td>85</td>
                            <td>28</td>
                            <td><?php echo $physics_T;?></td>
                        </tr>
                        <tr>
                            <td>Physics_Practical</td>
                            <td>15</td>
                            <td>05</td>
                            <td><?php echo $physics_P;?></td>
                        </tr>
                        <tr>
                            <td>Chemistry_Theory</td>
                            <td>85</td>
                            <td>28</td>
                            <td><?php echo $chem;?></td>
                        </tr>
                        <tr>
                            <td>Chemistry_Practical</td>
                            <td>15</td>
                            <td>05</td>
                            <td><?php echo $chem_P;?></td>
                        </tr>
                        <tr>
                            <td>Mathematics</td>
                            <td>100</td>
                            <td>33</td>
                            <td><?php echo $math;?></td>
                        </tr>
                        <tr>
                            <td>Biology_Theory</td>
                            <td>85</td>
                            <td>28</td>
                            <td><?php echo $bio_T;?></td>
                        </tr>
                        <tr>
                            <td>Biology_Practical</td>
                            <td>15</td>
                            <td>05</td>
                            <td><?php echo $bio_P;?></td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table> -->
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Result</td>
                                <td>Pass</td>
                            </tr>
                            <tr>
                                <td>Percentage</td>
                                <td><?= round($percentage,2).'%'?></td>
                            </tr>
                            <tr>
                                <td>Grade</td>
                                <td><?=$grade?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
<?php
    }else
    {
        echo "<br><b>Please Provide Whole Subjects Data!</b>";   
    }
    }else{
        echo "<br><b>Please Provide Marksheet Data For Generating Marksheet!</b>";
    }
    
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $( document ).ready(function() {
    $('.obtainedTotal').on('focusout', function() {
            var obtainedTotal = $('.obtainedTotal').val();
            console.log(obtainedTotal > 100)
            if(obtainedTotal >= 100)  
            {
                console.log("Value Must Be Less Than 100...");
            }
        });
    });
    
    $(document).ready(function(){
        calculateObtainedTotal();
        // $('.obtainedTotal').keyup(function(){ 

        //     if($('.obtainedTotal').val() < 100) 
        //     {
        //         alert("Value Must Be Less Than 100...");
        //     }
        // });
        

        $('.obtainedTotal').on("keydown keyup",function(){
            // if($('.obtainedTotal').val() > 100)
            // {
            //     alert("Value Must Be Less Than 100...");
            // }
            calculateObtainedTotal();
        });
        
     

        
    });
    function calculateObtainedTotal()
    {
        var obtained_marks = 0;
        $(".obtainedTotal").each(function(){
            if(!isNaN(this.value) && this.value.length != 0)
            {
                obtained_marks += parseFloat(this.value);
                $("#obtainedMarks").val(obtained_marks);
            }else
            {
                console.log("else part");
            }
        });
    }
</script>
</html>