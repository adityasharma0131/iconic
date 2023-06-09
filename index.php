
<?php
    $db_name = 'mysql:host=localhost;dbname=contact_db';
    $user_name = 'root';
    $user_password = '';


    $conn = new PDO($db_name, $user_name, $user_password);

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);

        $number = $_POST['number'];
        $number = filter_var($number, FILTER_SANITIZE_STRING);

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $courses = $_POST['course'];
        $courses = filter_var($courses, FILTER_SANITIZE_STRING);

        $gender = $_POST['gender'];
        $gender = filter_var($gender, FILTER_SANITIZE_STRING);


        $select_contact = $conn->prepare("SELECT * FROM contact_form WHERE name = ? AND number = ? AND email = ? AND courses = ? and gender = ?");
        $select_contact->execute([$name, $number, $email, $courses, $gender]);

        if($select_contact->rowCount() > 0){
            $message[] = 'already sent message!'; 
        }
        else{
            $insert_message = $conn->prepare("INSERT INTO contact_form(name, number, email, courses, gender) VALUES(?,?,?,?,?)");
            $insert_message->execute([$name, $number, $email, $courses, $gender]); 
            $message[] = 'message sent successfully';
        }

    }
?>



<?php require_once('html-head.php'); ?>

<?php require_once('navbar.php'); ?>
    
    <div class="popu">

    <section class="home" id="home">    
        
        <div class="bgbox">

            <div class="row">
                <div class="image">
                    <img src="img/Logopit_1682338675378.png" class="mainLoggo" alt="logo" data-value="9">
                    <!-- <a class="title1">तेजस्वि नावधीतमस्तु</a>
                    <a class="title2">ICONIC STUDENTS ACADEMY</a> -->

                </div>

                <div class="content">
                    <h3>Never stop "learning", because life never stops "teaching".</h3>
                    <h3>Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</h3>
                    <h3>An investment in knowledge pays the best interest.</h3>
                    <h3>The roots of education are bitter, but the fruit is sweet.</h3>
                    <h3>Education is not the filling of a pail, but the lighting of a fire.</h3>
                    
                    <h3>Never stop "learning", because life never stops "teaching".</h3>
                    <h3>Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</h3>
                    <h3>An investment in knowledge pays the best interest.</h3>
                    <h3>The roots of education are bitter, but the fruit is sweet.</h3>
                    <h3>Education is not the filling of a pail, but the lighting of a fire.</h3>
                    
                    <h3>Never stop "learning", because life never stops "teaching".</h3>
                    <h3>Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</h3>
                    <h3>An investment in knowledge pays the best interest.</h3>
                    <h3>The roots of education are bitter, but the fruit is sweet.</h3>
                    <h3>Education is not the filling of a pail, but the lighting of a fire.</h3>
        
                    <a href="#contact"><button class="btn" type="button">Contact Us</button></a>
                </div>
            </div>
            
            
        </div>
        
    </section>

    <section class="score">
        <div class="row">
            <div class="board">
                <img src="img/mortarboard.png" class="courses" alt="courses">
                <div class="number">
                    <h3 data-value="150" class="num">0</h3>
                    <p>Courses</p>
                </div>
            </div>
            <div class="board">
                <img src="img/education.png" class="students" alt="students">
                <div class="number">
                    <h3 data-value="1300" class="num">0+</h3>
                    <p>Students</p>
                </div>
            </div>
            <div class="board">
                <img src="img/teacher.png" class="teachers" alt="teacher">
                <div class="number">
                    <h3 data-value="30" class="num">0+</h3>
                    <p>Teachers</p>
                </div>
            </div>
            <div class="board">
                <img src="img/ranking.png" class="toppers" alt="toppers">
                <div class="number">
                    <h3 data-value="1000" class="num">0+</h3>
                    <p>Toppers</p>
                </div>
            </div>

        </div>
    </section>

    <section class="about" id="about">
        
        <div class="about-bgbox">
            <div class="row">
                <div class="image">
                    <img src="img/Seminar-amico.png" class="mainLoggo" alt="logo" data-value="9">
                </div>
                <div class="content">
                    <h3>WHY <span>CHOOSE US?</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          Duis aute irure.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         </p>

                </div>

            </div>

            
        </div>

    </section>


    <section class="course" id="course">
        <div class="course-bgbox">
        <div class="row">
            <div class="content">
                <h3>OUR <span>SCHOOL LEVEL</span> COURSES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </p>

            </div>
        <div class="swiper course-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide-course">

                    <img src="img/number-8.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>

                <div class="swiper-slide slide-course">

                    <img src="img/number-9.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course">

                    <img src="img/number-10.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course">

                    <img src="img/number-8.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course">

                    <img src="img/number-9.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course">

                    <img src="img/number-10.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                
            </div> 
            
             
        </div>

    </div> 
        </div>
    </section>



    <section class="course2">
        <div class="course-bgbox">
        <div class="row">
            
        <div class="swiper course-slider2">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide-course2">

                    <img src="img/number-11.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>

                <div class="swiper-slide slide-course2">

                    <img src="img/number-12.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course2">

                    <img src="img/number-11.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course2">

                    <img src="img/number-12.png" alt="person1">
                    <h2>SSC/CBSE</h2>
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
               
                
                

                
            </div> 
            
   
        </div>
        <div class="content">
            <h3>OUR <span>COLLEGE LEVEL</span> COURSES</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 </p>

        </div>
    </div> 
        </div>
    </section>


    <section class="course3">
        <div class="course-bgbox">
        <div class="row">
            <div class="content">
                <h3>OUR <span>COMPETITIVE EXAMINATION LEVEL</span> COURSES</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                      Duis aute irure.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </p>
    
            </div>
            
        <div class="swiper course-slider3">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide-course3">

                    <div class="img"><span class="jee"><p>JEE (MAINS)</p></span></div>
    
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>

                <div class="swiper-slide slide-course3">
                        <div class="img"><span class="neet"><p>NEET (UG)</p></span></div>                          
                    
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course3">

                    <div class="img"><span class="cet"><p>MHT-CET</p></span></div>
                    
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course3">

                    <div class="img"><span class="jee"><p>JEE (MAINS)</p></span></div>
                    
                    <span>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star" id="active"></i>
                        <i class="fa-solid fa-star"></i> 
                    </span>

                    <div class="info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button href="#" type="button" class="know-more">Know More</button>
                    </div>

                </div>
                <div class="swiper-slide slide-course3">
                    <div class="img"><span class="neet"><p>NEET (UG)</p></span></div>                          
                
                <span>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star"></i> 
                </span>

                <div class="info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button href="#" type="button" class="know-more">Know More</button>
                </div>

            </div>
            <div class="swiper-slide slide-course3">

                <div class="img"><span class="cet"><p>MHT-CET</p></span></div>
                
                <span>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star" id="active"></i>
                    <i class="fa-solid fa-star"></i> 
                </span>

                <div class="info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button href="#" type="button" class="know-more">Know More</button>
                </div>

            </div>
               
                
                

                
            </div> 
            
   
        </div>
        
    </div> 
        </div>
    </section>



    
    <section class="reviews" id="reviews">
        <div class="review-bgbox">

            <h1 class="heading">STUDENT'S <span>REVIEW</span></h1>

            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Quos molestias dignissimos ipsam inventore voluptatem,
                            veritatis consectetur similique,
                            necessitatibus omnis impedit
                        </p>

                        <div class="user">
                            <img src="img/profile-user.png" alt="user">
                            <div class="users-info">
                                <h3>Ravindra Sarak</h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="swiper-slide slide">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos molestias dignissimos ipsam inventore voluptatem,
                            veritatis consectetur similique,
                            necessitatibus omnis impedit
                        </p>

                        <div class="user">
                            <img src="img/profile-user.png" alt="user">
                            <div class="users-info">
                                <h3>Satish Mishra</h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide slide">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos molestias dignissimos ipsam inventore voluptatem,
                            veritatis consectetur similique,
                            necessitatibus omnis impedit
                        </p>

                        <div class="user">
                            <img src="img/profile-user.png" alt="user">
                            <div class="users-info">
                                <h3>Prakash Dubey</h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide slide">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos molestias dignissimos ipsam inventore voluptatem,
                            veritatis consectetur similique,
                            necessitatibus omnis impedit
                        </p>

                        <div class="user">
                            <img src="img/profile-user.png" alt="user">
                            <div class="users-info">
                                <h3>Prajna Chauhan</h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="swiper-slide slide">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos molestias dignissimos ipsam inventore voluptatem,
                            veritatis consectetur similique,
                            necessitatibus omnis impedit
                        </p>

                        <div class="user">
                            <img src="img/profile-user.png" alt="user">
                            <div class="users-info">
                                <h3>Sakshi Nishad</h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="swiper-slide slide">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos molestias dignissimos ipsam inventore voluptatem,
                            veritatis consectetur similique,
                            necessitatibus omnis impedit
                        </p>

                        <div class="user">
                            <img src="img/profile-user.png" alt="user">
                            <div class="users-info">
                                <h3>Aditya Sharma</h3>
                                <div class="stars">
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star" id="active"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="swiper-pagination"></div>
            </div>


        </div>
    </section>


    <section class="teacher" id="staff">
        <div class="teachers-bgbox">
        <h1 class="heading">OUR <span>TEACHING STAFF</span></h1>
        <div class="swiper teachers-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    

                    <img src="img/Thinking face-bro.png" alt="person1">

                    <div class="info">
                        <h3>Sumita Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>


                <div class="swiper-slide slide">

                    <img src="img/Waist bag-bro.png" alt="person1">

                    <div class="info">
                        <h3>Ravindra Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>


                <div class="swiper-slide slide">

                    <img src="img/Waist bag-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <img src="img/Mathematics-bro.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <img src="img/Formula-bro.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <img src="img/Formula-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <img src="img/Teacher student-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <img src="img/Students-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide">

                    <img src="img/Webinar-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>


            </div>
            <div class="swiper-pagination"></div>    
        </div>
        

        </div>
    </section>


    <section class="staff">
        <div class="staff-bgbox">
        <h1 class="heading">OUR NON-<span>TEACHING STAFF</span></h1>
        <div class="swiper staff-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide-staff">
                    

                    <img src="img/Thinking face-bro.png" alt="person1">

                    <div class="info">
                        <h3>Sumita Shetty</h3>
                        <h4>FRONT-END DEVELOPER</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>


                <div class="swiper-slide slide-staff">

                    <img src="img/Waist bag-bro.png" alt="person1">

                    <div class="info">
                        <h3>Ravindra Shetty</h3>
                        <h4>RECEPTIONIST</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>


                <div class="swiper-slide slide-staff">

                    <img src="img/Waist bag-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <h4>SOCIAL MEDIA</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide-staff">

                    <img src="img/Mathematics-bro.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <h4>GRAPHICS</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide-staff">

                    <img src="img/Formula-bro.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <h4>RECEPTIONIST</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide-staff">

                    <img src="img/Formula-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <h4>TEC SUPPORT</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide-staff">

                    <img src="img/Teacher student-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <h4>SECURITY</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide-staff">

                    <img src="img/Students-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                         <h4>BACK-END DEVELOPER</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>

                <div class="swiper-slide slide-staff">

                    <img src="img/Webinar-pana.png" alt="person1">

                    <div class="info">
                        <h3>firoz Shetty</h3>
                        <h4>FULL-STACK DEVELOPER</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iure aut omnis in fuga tempore error recusandae, quidem ea autem nostrum est voluptates, ratione dignissimos voluptate? Non impedit iure quod!</p>
                    </div>

                </div>


            </div>
            <div class="swiper-pagination"></div>    
        </div>

        </div>
    </section>



    <section class="contact" id="contact">
        <div class="contact-bgbox">
            <h1 class="heading">CONTACT<span> US</span></h1>
            <div class="row">

                <div class="image">
                    <img src="img/Contact us-amico.png" alt="contact-us">
                </div>

                <form action="" method="post">
                    <span>YOUR NAME</span>
                    <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">

                    <span>YOUR E-MAIL</span>
                    <input type="email" required placeholder="enter your valid e-mail address" maxlength="50" name="email" class="box">

                    <span>YOUR PHONE NUMBER</span>
                    <input type="text" required placeholder="enter your valid phone number" maxlength="9999999999" min="0" name="number"  class="box" onkeypress="if(this.value.length == 10) return false;">

                    <span>SELECT COURSE</span>
                    <select name="course" class="box" required>
                        <option value="" disabled selected>Select the Course---</option>
                        <option value="SSC">SSC</option>
                        <option value="CBSC">CBSC</option>
                        <option value="HSC">HSC</option>
                        <option value="JEE">JEE</option>
                        <option value="NEET">NEET</option>
                        <option value="MHT-CET">MHT-CET</option>
                        <option value="IG">IG</option>
                    </select>

                    <span>SELECT GENDER</span>
                    <div class="radio">
                        <input type="radio" name="gender" value="male" id="male" required>
                        <label for="male">MALE</label>

                        <input type="radio" name="gender" value="female" id="female"required>
                        <label for="female">FEMALE</label>
                    </div>

                    <input type="submit" value="send" class="submit-btn" name="send">
                
                </form>

            </div>

        </div>
    </section>




    <section class="location" id="location">
        <div class="location-bgbox">
            <h1 class="heading">OUR<span> LOCATION</span></h1>
            <div class="row">

                <div class="location-ggl">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d642.3487726540073!2d72.90937328810418!3d19.085013582293797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c76c61ea4d57%3A0x15702d7cb539983a!2sIconic%20Students%20Academy!5e1!3m2!1sen!2sin!4v1685106970677!5m2!1sen!2sin" width="900" height="455" style="border-radius: .5rem; border: solid 4px black;  box-shadow:  0px 4px 4px 4px var(--bgbox);;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="image">
                    <img src="img/Navigation-pana.png" alt="contact-us">
                </div>

        </div>

        </div>
    </section>


    <section class="gallery" id="gallery">
        <div class="gallery-bgbox">
            <h1 class="heading">OUR<span> GALLERY</span></h1>
            <div class="swiper gallery-slider">

                <div class="swiper-wrapper">
                        
                    <div class="swiper-slide slide">
                        <img src="img/Thinking face-bro.png" alt="person1">
                        
                    </div>

                    <div class="swiper-slide slide">
                        <img src="img/Webinar-amico.png" alt="person1">
                        
                    </div>

                    <div class="swiper-slide slide">
                        <img src="img/Contact us-amico.png" alt="person1">
                        
                    </div>

                    <div class="swiper-slide slide">
                        <img src="img/Formula-pana.png" alt="person1">
                        
                    </div>

                    <div class="swiper-slide slide">
                        <img src="img/Science-pana.png" alt="person1">
                        
                    </div>
                    <div class="swiper-slide slide">
                        <img src="img/ShadowLOGO.png" alt="person1">
                        
                    </div>
                    <div class="swiper-slide slide">
                        <img src="img/Online test-amico.png" alt="person1">
                        
                    </div>
                    <div class="swiper-slide slide">
                        <img src="img/404 error with a landscape-pana.png" alt="person1">
                        
                    </div>
                </div>
                
        <div class="swiper-pagination"></div>
        </div>
 
    </div>


    </section>

    <div class="popcontainer">
    
        <div class="popup-container" id="popup-container"></div>
      </div>
    


</div>

<?php require_once('footer.php'); ?>


    

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>
<script src="login.js"></script>

</body>
</html>