<?php
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNMAE', 'habib');
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNMAE);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['submit'])) {
    $type=$_POST['type'];
    $day=$_POST['day'];
    $link=$_POST['link'];
    $location=$_POST['location'];
    $mobile=$_POST['mobile'];
    $budget=$_POST['budget'];

$sqli="INSERT INTO fb(type, day, link, location, mobile, budget) VALUES ('$type', '$day', '$link', '$location', '$mobile', '$budget')";
$re=mysqli_query($conn,$sqli);
if ($re) {
    echo"hoyse";
}else{
    echo "hoyni";
}
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="index.html"><h1>ActiveBoostHub</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                      <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Project Histroy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                     
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

      

        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <section class="page-section" id="contact">
                    <div class="container">
                          
                    <div class="row ">
                        <div class="h11">
                            <h2 class="section-heading text-uppercase">Facebook Video Boost</h2>
                        </div>
                        <div class="col">
                        <img src="assets/img/IMG-20230319-WA0003.jpg" alt=""  srcset="">
                        </div>
                        <div class="col">
                       <div>
                        <h2>FACEBOOK BOOSTING SERVICES</h2>
                        <h3>Minimum Budget: <s>৳ 2000</s> ৳ 1500</h3><br>
                        <p>মিনিমাম প্যাকেজ ১৫১৮ টাকা  ১৫% ভ্যাট + ২০% সার্ভিস চার্জসহ এবং লেনদেনের খরচ ব্যতীত।<br><br>
                            আপনি ১৫১৮০ / ৩০৩৬০ টাকার প্যাকেজ কিনলে ক্যাম্পেইনের কমপ্লিট রিপোর্ট পাবেন ইমেইলে।
                        </p>
                        <p>অর্ডার করার আগে সাবধানে নীচের বিবরণ পড়ুন. Video ⬇️ </p>

                        <h3>নিচের বিবরণগুলো দিন:
                        </h3>
                        <form action="#" method="POST">
                            <div class="mb-3">
                              <label for="type" class="form-label">Ads Type</label><br>
                              <select name="type" id="type">
                                <option value="Skippable Ads">Skippable Ads</option>
                                     <option value="In-Feed Ads">In-Feed Ads</option>
                              </select>
                            </div>
                            <div class="mb-3">
                              <label for="">Days</label>
                              <input type="number" class="form-control" name="day">
                              <div class="form-text">Video Should Be 15s.</div>
                            </div>
                            <div class="mb-3">
                              <label for="" class="form-label">ভিডিও Link দেন</label>
                              <input type="link" name="link"class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Location (কোথায় Ads চালাতে চান?)</label>
                                <input type="text" name="location"class="form-control">
                              </div>
                              <div class="mb-3">
                                <label for="" class="form-label">Mobile Number</label>
                                <input type="mobile" name="mobile"class="form-control">
                              </div>
                              <div>
                                <ul>
                                    <p>নিচের লিষ্টের কোনো একটি টাইপ কনটেন্ট হলে আপনার অর্ডার টি ক্যানসেল হয়ে যাবে।</p>
                                    <li>লো কোয়ালিটি কনটেন্ট</li>
                                    <li>স্ক্যাম/জুয়া / বেটিং /MLM /অনলাইন মানি ইনকাম /ফরেক্স / ক্রিপ্টোকারেন্সি     </li>
                                    <li>অ্যাডাল্ট / সেনসিটিভ কনটেন্ট / থাম্বনেইলে সেনসিটিভ কিংবা অ্যাডাল্ট ছবি সম্বলিত</li>
                                    <li>ওয়েট লস / ফুড সাপ্লিমেন্ট / স্কিন কেয়ার / হোমিওপ্যাথি / আয়ুর্বেদ চিকিৎসা / কবিরাজি</li>
                                    <li>ভিক্ষাবৃত্তি / ফান্ড রাইজিং / ডোনেশন</li>
                                    <li>প্রতিশোধ/ভায়োলেন্স</li>
                                    <li>অ্যাডাল্ট প্রোডাক্ট</li>
                                    <li>কপি কনটেন্ট/ ফেক নিউজ / গুজব</li>
                                   
                                </ul>
                                
                              </div>
                              <div class="mb-3">
                                <label for="budget" class="form-label">Budget</label>
                                <select name="budget" id="budget">
                                  <option value="1500">1500</option>
                                  <option value="2000">2000</option>
                                       <option value="5000">5000</option>
                                </select>


                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="out">
                              <label class="form-check-label" for="out">উুপরের তালিকার সাথে আমার Video এর মিল নেই আমি সম্মতি দিলাম</label>
                            </div>
                          <button class="btn btn-primary" type="submit" name="submit">Add to cart</button>
                          </form>


                       </div>
                    </div>

                </section>
                
            </div>
        </header>



         <!-- Bootstrap core JS-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
         <!-- Core theme JS-->
         <script src="js/scripts.js"></script>
         <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
     </body>
 </html>

