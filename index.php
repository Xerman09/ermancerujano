<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePortfolio</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Design.css">

</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='bx bx-up-arrow'></i></button>

    <nav class="header">
        <a href="#" class="logo"> <span class="multiple-text1"></span></a>
        
        <div class = "nav">
            <a href="#Home" style="--i:1;">HOME</a>
            <a href="#About" style="--i:2;">ABOUT</a>
            <a href="#Services" style="--i:3;">SERVICES</a>
            <a href="#certificates" style="--i:4;">CERTIFICATES</a>
            <a href="#Projects" style="--i:5;">PROJECTS</a>
            <a href="#SNA" style="--i:5;">SNA</a>
        </div>

    </nav>

    <!--HOME-->
    <box class="Home" id="Home">
        <!--Header Content-->
        <div class ="hcontent">
            <h3>Hello, I am</h3>
            <br>
            <h1>Erman Ace Cerujano</h1>
            <br>
            <h3>And I'm a <span class="multiple-text"> </span></h3>
            <br><br>
            
            <!--Social Media Accounts-->
            <div class="socialmediaacc">
                <a href="https://web.facebook.com/ea.cerujano" style="--i:8;" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://twitter.com/cjjfiiiehhjckia?t=q0NHxEejbIpeoaoRQdQTmQ&s=09" style="--i:9;" target="_blank"><i class ="bx bxl-twitter"></i></a>
                <a href="https://www.instagram.com/eysss_09/" style="--i:10;" target="_blank"><i class ="bx bxl-instagram-alt"></i></a>
                <a href="https://www.linkedin.com/in/erman-ace-cerujano-20105b1b4/" style="--i:11;" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                <a href="mailto:ermancerujano10@gmail.com" style="--i:12;" target="_blank"><i class='bx bx-envelope' ></i></a>
                
            </div>
    
            <!--Curriculum Vitae Download-->
            <a href="CV.pdf" class="button" download> Download CV</a>
        </div>

        <!--Picture-->
        <div class ="profilepicture">
            <img src="pp4.png" width="612px" height="612px">
        </div>

    </box>

    <!--ABOUT-->
    <div class="About" id="About">
        <h2 class="heading">About <span>Me</span></h2>
        <div class ="row">
            <!--Picture-->
            <div class="aboutimg">
                <img src="pp4.2.png">
            </div>


            <div class="aboutme">
                <!--About Titles-->
                <div class="abt-titles">
                    <p class="abt-links active" onclick="opentab('education')" style="--i:11;">Education</p>
                    <p class="abt-links" onclick="opentab('achievements')"style="--i:12;">Achievements</p>
                    <p class="abt-links" onclick="opentab('seminar')"style="--i:13;">Seminars</p>
                    <p class="abt-links" onclick="opentab('leadership')"style="--i:14;">Leadership Experience</p>
                </div>

                <!--Educational Attainment-->
                <div class ="abt-contents active" id="education">
                    <ul>
                        <li>
                            <span>COLLEGE</span>
                            <p><b>Pangasinan State University</b>
                            <br>   Urdaneta City
                            <br>   Computer Engineering
                            <br>   2021 - 2025</p>
                            <p><a href="https://psu.edu.ph/" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>School Page</a></p>
                        </li>

                        <li>
                            <span>SENIOR HIGHSCHOOL</span>
                            <p><b>Don Ramon E. Costales Memorial National High School</b>
                            <br>Villasis Pangasinan
                            <br>TVL-ICT(CSS)
                            <br>2019 - 2021</p>
                            <p><a href="https://web.facebook.com/officialdonramon/?_rdc=1&_rdr" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>School Page</a></p>
                        </li>

                        <li>
                            <span>JUNIOR HIGHSCHOOL</span>
                            <p> <b>Saint Anthony Abbot Academy</b>
                            <br>Villasis Pangasinan
                            <br>2015 - 2019</p>
                            <p><a href="https://web.facebook.com/anthonians2019/?_rdc=1&_rdr" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>School Page</a></p>
                        </li>
                        
                        <li>
                            <span>ELEMENTARY</span>
                            <p> <b>Carmen Elementary School</b>
                            <br>Rosales Pangasinan
                            <br>2008 - 2015</p>
                            <p><a href="https://web.facebook.com/carmenschool16/?_rdc=1&_rdr" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>School Page</a></p>
                        </li>
                    </ul>
                </div>

                <!--List of Achievements-->
                <div class ="abt-contents " id="achievements">
                    <ul>
                        <li>
                            <span>GRADE 12</span>
                            <p>
                                <b>Excellence Award</b>
                                <b> With Highest Honor</b>
                                <br>Second Semester
                                <br>Don Ramon E. Costales Memorial National High School
                                <br>2020 - 2021
                            </p>
                            <p>
                                <b>Excellence Award</b>
                                <b> With High Honor</b>
                                <br>First Semester
                                <br>Don Ramon E. Costales Memorial National High School
                                <br>2020 - 2021
                            </p>
                            <p>
                                <b>Slogan Making Contest</b>
                                <b>Third Place</b>
                                <br>Second Semester
                                <br>Don Ramon E. Costales Memorial National High School
                                <br>2020 - 2021
                            </p>
                            <p>
                                <b>Essay Writing Contest</b>
                                <b>Second Place</b>
                                <br>Second Semester
                                <br>Don Ramon E. Costales Memorial National High School
                                <br>2020 - 2021
                            </p>
                        </li>
                        <li>
                            <span>GRADE 11</span>
                            <p>
                                <b>Excellence Award</b>
                                <b> With High Honor</b>
                                <br>Second Semester
                                <br>Don Ramon E. Costales Memorial National High School
                                <br>2019 - 2020
                            </p>
                            <p>
                                <b>Excellence Award</b>
                                <b> With High Honor</b>
                                <br>First Semester
                                <br>Don Ramon E. Costales Memorial National High School
                                <br>2020 - 2021
                            </p>
                        </li>
                        <li>
                            <span>GRADE 10</span>
                            <p>
                                <b>Excellence Award</b>
                                <br><b> With Honor</b>
                                <br>Saint Anthony Abbot Academy
                                <br>2018 - 2019
                            </p>
                        </li>
                        <li>
                            <span>GRADE 9</span>
                            <p>
                                <b>Excellence Award</b>
                                <br><b> With Honor</b>
                                <br>Saint Anthony Abbot Academy
                                <br>2017 - 2018
                            </p>
                            <p>
                                <b>Distric Level Math-Sci Festival: Sudoku</b>
                                <b>First Place</b>
                                <br>Holy Child Academy
                                <br>2017
                            </p>
                        </li>
                        <li>
                            <span>GRADE 8</span>
                            <p>
                                <b>District Level Mathematics Quiz Bee</b>
                                <br><b>Third Place</b>
                                <br>Saint Anthony Abbot Academy
                                <br>2016
                            </p>
                        </li>
                    </ul>
                </div>           
                
                <!--List of Seminars Attended-->
                <div class ="abt-contents " id="seminar">
                    <ul>
                        <li>
                            <span> AI: How the Technology can be Utilized Responsibility and Reliability as Human Support</span>
                            <p>    Department of Information and Communications Technology
                            <br>   Zoom
                            <br>   October 13, 2023</p>
                            <p><a href="./images/AI How the technology - DICT.png" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>Certificate</a></p>
                        </li>
                        <li>
                            <span>CyberTalks</span>
                            <p>    Department of Information and Communications Technology
                            <br>   Zoom
                            <br>   October 12, 2023</p>
                            <p><a href="./images/cybertalks - DICT.png" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>Certificate</a></p>
                        </li>
                        <li>
                            <span>DLSU-NVIDIA: Fundamentals of Deep Learning</span>
                            <p>    DLSU-NVIDIA
                            <br>   Zoom
                            <br>   September 29, 2023 - October 1, 2023</p>
                            <p><a href="./images/NVIDIA CERTT.png" target="_blank" class="abutton"><i class='bx bx-link-external' ></i>Certificate</a></p>
                        </li>
                        <li>
                            <span>Advancement of Engineering Career in Australia</span>
                            <p>    Australian Institute of Engineering
                            <br>   Zoom
                            <br>   August 05, 2023</p>
                        </li>
                        <li>
                            <span>Basic of Cybersecuirty Incident Response and Handling</span>
                            <p>    Department of Information and Communications Technology
                            <br>   Zoom
                            <br>   July 28, 2023</p>
                        </li>
                        <li>
                            <span>Leadership Training</span>
                            <p>    Don Ramon E. Costales Memorial National High School
                            <br>   Villasis Pangasinan
                            <br>   2019</p>
                        </li>
                        <li>
                            <span>Leadership Camp</span>
                            <p>    Univeristy of Pangasinan (Urdaneta Campus)
                            <br>   Urdaneta City
                            <br>   2019</p>
                        </li>
                    </ul>
                </div>                
                
                <!--Leadership Experience-->
                <div class ="abt-contents " id="leadership">
                    <ul>
                        <li>
                            <span>THIRD YEAR COLLEGE</span>
                            <p>
                                <b>Position: Internal Vice Governor</b>
                                <br>Organization: Institute of Computer Engineering of the Philippines Student Edition
                                <br>Year: 2023 - 2024
                            </p>
                        </li>
                        <li>
                            <span>SECOND YEAR COLLEGE</span>
                            <p>
                                <b>Position: Auditor</b>
                                <br>Organization: Institute of Computer Engineering of the Philippines Student Edition
                                <br>Year: 2022 - 2023
                            </p>
                        </li>
                        
                        <li>
                            <span>FIRST YEAR COLLEGE</span>
                            <p>
                                <b>Position: First Year Representative</b>
                                <br>Organization: Institute of Computer Engineering of the Philippines Student Edition
                                <br>Year: 2021 - 2022
                            </p>
                        </li>

                        <li>
                            <span>GRADE 12</span>
                            <p>
                                <b>Position: Grade 12 Representative</b>
                                <br>Organization: Supreme Student Government
                                <br>Year: 2020 - 2021
                            </p>

                            <p>
                                <b>Position: President</b>
                                <br>Organization: TVL Department
                                <br>Year: 2020 - 2021
                            </p>
                        </li>

                        <li>
                            <span>Grade 11</span>
                            <p>
                                <b>Position: Vice President</b>
                                <br>Organization: TVL Department
                                <br>Year: 2019 - 2020
                            </p>
                        </li>     
                        
                        <li>
                            <span>Grade 10</span>
                            <p>
                                <b>Position: Grade 10 Representative</b>
                                <br>Organization: Supreme Student Government
                                <br>Year: 2018 - 2019
                            </p>
                        </li>     
                    </ul>
                </div>             

            </div>
        </div>
    </div>

    <!--SERVICES OFFERED-->
    <div class="Services" id="Services">
        <h2 class="heading">My <span>Services</span></h2>

        <div class="scontainer">
            <div class="sbox">
                <i class="bx bx-code-alt"></i>
                <h3>Web Development</h3>
                <p>I can create modern website design using HTML, CSS, PHP, and JavaScript</p>
            </div>

            <div class="sbox">
                <i class='bx bx-package'></i>
                <h3>3D Modeling</h3>
                <p>I can digitally design and build to a 3D machine</p>
            </div>

            <div class="sbox">
                <i class='bx bxs-edit'></i>
                <h3>Graphic Design</h3>
                <p>I design poster, flyers, banner, and other kinds of graphic.</p>
            </div>
        </div>
    </div>

    <!--LIST OF CERTIFICATES-->
    <div id="certificates">
        <h2 class="heading">My <span>Certificates</span></h2>
        <div class="certificates-list">
            <div class = "certificates">
                <a href="./images/Responsive Web Design - FreeCodeCamp Certification.png" target="_blank">
                    <img src="./images/Responsive Web Design - FreeCodeCamp Certification.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>RESPONSIVE WEB DESIGN CERTIFICATE</h3>
                    <p>FROM: freecodecamp</p>
                    <a href="https://www.freecodecamp.org/certification/fccaf1b6476-5243-4878-914f-9fa2e5360520/responsive-web-design" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/Javascript.png" target="_blank">
                    <img src="./images/Javascript.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>JAVASCRIPT ALGORITHMS AND DATA STRUCTURES</h3>
                    <p>FROM: freecodecamp</p>
                    <a href="https://www.freecodecamp.org/certification/fccaf1b6476-5243-4878-914f-9fa2e5360520/javascript-algorithms-and-data-structures" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/Front End Development - HTML.jpg" target="_blank">
                    <img src="./images/Front End Development - HTML.jpg" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>FRONT END DEVELOPMENT - HTML</h3>
                    <p>FROM: Great Learning</p>
                    <a href="https://olympus.mygreatlearning.com/courses/12761/certificate" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/Solo Learn - PHP.png" target="_blank">
                    <img src="./images/Solo Learn - PHP.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>PHP</h3>
                    <p>FROM: Sololearn</p>
                    <a href="https://www.sololearn.com/certificates/CC-EGYYRMWJ" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/Solo Learn - Python Data Structures.png" target="_blank">
                    <img src="./images/Solo Learn - Python Data Structures.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>Python Data Structures</h3>
                    <p>FROM: Sololearn</p>
                    <a href="https://www.sololearn.com/certificates/CT-DQQGQEQY" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/Intro to ChatGPT and Generative AI.jpg" target="_blank">
                    <img src="./images/Intro to ChatGPT and Generative AI.jpg" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>Introduction to ChatGPT and Generative AI</h3>
                    <p>FROM: 365 Data Science</p>
                    <a href="https://learn.365datascience.com/certificates/CC-8687F176C6/" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/NVIDIA CERTT.png" target="_blank">
                    <img src="./images/NVIDIA CERTT.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>DEEP LEARNING</h3>
                    <p>FROM: NVIDIA</p>
                    <a href="./images/NVIDIA CERTT.png" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/AI How the technology - DICT.png" target="_blank">
                    <img src="./images/AI How the technology - DICT.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>AI</h3>
                    <p>FROM: DICT</p>
                    <a href="./images/AI How the technology - DICT.png" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            <div class = "certificates">
                <a href="./images/cybertalks - DICT.png" target="_blank">
                    <img src="./images/cybertalks - DICT.png" alt="Responsive Web Design - FreeCodeCamp Certification">
                </a>
                <div class="layer">
                    <h3>CYBERTALKS</h3>
                    <p>FROM: DICT</p>
                    <a href="./images/cybertalks - DICT.png" target="_blank" class="cert-button">Learn More</a>
                </div>
            </div>

            
        </div>
    </div>

    <!--LIST OF PROJECTS-->
    <div class="About" id="Projects">
        <h2 class="heading">My <span>Projects</span></h2>

        <div class="Prow">
            <div class="project">
                <div class="picture">
                    <img src="rfid.png">
                </div>

                <div class="Description">
                    <span>Attendance System Using RFID</span>
                    <p> An Attendance System using RFID for the Student of Pangasinan State University Urdaneta City Campus. This is built using Python, PHP, and SQL</p>
                    <p> This will help the instructor to easily track the attendance of the system</p>
                    <b><p>Feature</b> : With SMS Notification
                    <b><br>Date</b> : January 31, 2023</p>
                </div>
            </div>
        </div>
    </div>

    <div class="Services" id ="SNA">
        <h2 class="heading">System Network and Administrator 1 <span>Portfolio</span></h2>

        <div class="MidtermQuiz snaTab">
            <span>Midterm Quiz</span>
            <br><br>
            <style>
                .MidtermQuiz .quizContainer{
                    width: 400px;
                    margin: auto;
                    height: 500px;
                }
                .MidtermQuiz .quizContainer img{
                    width: 100%;
                    height: 100%;
                }
            </style>
            <table>
                <tr style="border: none;">
                    <td style="border: none;">
                        <div class="quizContainer">
                            <img src="./quiz/MQ1.jpg">
                        </div>
                    </td>
                    <td style="border: none;">
                        <div class="quizContainer">
                            <img src="./quiz/MQ2.jpg">
                        </div>
                    </td>
                    <td style="border: none;">

                    <div class="quizContainer">
                        <img src="./quiz/MQ3.jpg">
                    </div>
                </td>
                </tr>
            </table>
        </div>
        <br><br>
        <div class="MidtermQuiz snaTab">
            <span>Final Quiz</span>
            <br><br>
            <style>
                .MidtermQuiz .quizContainer{
                    width: 400px;
                    border: 1px solid darkred;
                    margin: auto;
                }
                .MidtermQuiz .quizContainer img{
                    width: 100%;
                    height: 100%;
                }
            </style>
            <table>
                <tr style="border: none; ">
                    <td style="border: none;">
                        <div class="quizContainer">
                            <img src="./quiz/FQ1.jpg">
                        </div>
                    </td>
                    <td style="border: none;">
                        <div class="quizContainer">
                            <img src="./quiz/FQ2.jpg">
                        </div>
                    </td>
                    <td style="border: none;">

                    <div class="quizContainer">
                        <img src="./quiz/FQ3.jpg">
                    </div>
                </td>
                </tr>
            </table>
            <br>
        </div>
        <div class="MidtermQuiz snaTab"><br><br>
            <span style="text-align:center;"><p>Midterm Exam</p></span>
            
            <style>
                .MidtermQuiz .quizContainer{
                    width: 400px;
                    border: 1px solid darkred;
                    margin: auto;
                }
                .MidtermQuiz .quizContainer img{
                    width: 100%;
                    height: 100%;
                }
                .MidtermQuiz span p{
                    text-align: Center;
                }
            </style>
            <table>
                <tr style="border: none; ">
                    <td style="border: none;">
                        <div class="quizContainer">
                            <img src="./quiz/MidtermExam.jpg">
                        </div>
                    </td>
                    </tr>
                    </table>
                    </div>
                    <br><br>
                    <div class="MidtermQuiz snaTab">
                        <span style="text-align:center;"><p>Final Exam</p></span>
                        
                        <style>
                            .MidtermQuiz .quizContainer{
                                width: 400px;
                                border: 1px solid darkred;
                                margin: auto;
                            }
                            .MidtermQuiz .quizContainer img{
                                width: 100%;
                                height: 100%;
                            }
                        </style>
                        <table>
                            <tr style="border: none; ">
                                <td style="border: none;">
                                    <div class="quizContainer">
                                        <img src="./quiz/FQ3.jpg">
                                    </div>
                                </td>
                                </tr>
                                </table>
                                </div>
                                <br><br>
        <style>

        </style>
        <div class="Laboratories snaTab">
            <span>SNA 1 - MIDTERM ASSIGNMENT</span>
            <br><br>
            <table>
                <tr>
                    <th width="150px">NO.</th>
                    <th>Assignment Description</th>
                    <th width="400px">File</th>
                </tr>
                <tr>
                    <td>ASSIGN 1</td>
                    <td>Setup Web Server</td>
                    <td><a href="./assignment/Assignment 1.pdf" target="_blank"><div class="dl">Assignment 1</div></a></td>
                </tr>
                <tr>
                    <td>ASSIGN 2</td>
                    <td>Setup Mail Server</td>
                    <td><a href="./assignment/Assignment 2.pdf" target="_blank"><div class="dl">Assignment 2</div></a></td>
                </tr>
                <tr>
                    <td>ASSIGN 3</td>
                    <td>Setup DNS Server</td>
                    <td><a href="./assignment/Assignment 3.pdf" target="_blank"><div class="dl">Assigment 3</div></a></td>
                </tr>
                </table>
            </div>
            <br><br>

            <!-- FINAL ASSIGNMENT -->
            <div class="Laboratories snaTab">
                <span>SNA 1 - FINAL ASSIGNMENT</span>
                <br><br>
                <table>
                    <tr>
                        <th width="150px">NO.</th>
                        <th>Assignment Description</th>
                        <th width="400px">File</th>
                    </tr>
                    <tr>
                        <td>ASSIGN 1</td>
                        <td>CISCO Cybersecurrity Certification</td>
                        <td><a href="./assignment/FAssignment 1.pdf" target="_blank"><div class="dl">Assignment 1</div></a></td>
                    </tr>
                    <tr>
                        <td>ASSIGN 2</td>
                        <td>National Cybersecurity Plan (NSCP) of The Philippines by DICT</td>
                        <td><a href="./assignment/FAssignment 2.pdf" target="_blank"><div class="dl">Assignment 2</div></a></td>
                    </tr>
                </table>
                <br><br>
            </div>
        <div class="Laboratories snaTab">
            <span>SNA 1 - LABORATORIES</span>
            <br><br>
            <table>
                <tr>
                    <th width="100px">NO.</th>
                    <th>Laboratory Description</th>
                    <th width="400px">File</th>
                </tr>
                <tr>
                    <td>LAB 1</td>
                    <td>Virtual Machines</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM01_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 1</div></a></td>
                </tr>
                <tr>
                    <td>LAB 2</td>
                    <td>Raspberry Pi Operating System</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM02_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 2</div></a></td>
                </tr>
                <tr>
                    <td>LAB 3</td>
                    <td>Network Monitoring Tool</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM03_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 3</div></a></td>
                </tr>
                <tr>
                    <td>LAB 4</td>
                    <td>Internet Monitoring Tool</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM04_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 4</div></a></td>
                </tr>
                <tr>
                    <td>LAB 5</td>
                    <td>Honeypot</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM05_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 5</div></a></td>
                </tr>
                <tr>
                    <td>LAB 6</td>
                    <td>Setting-up Thermal Camera with RPi</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM06_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 6</div></a></td>
                </tr>
                <tr>
                    <td>LAB 7</td>
                    <td>Intro to Cybersecurity Skills &#x28Pac-man&#x29</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM07_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 7</div></a></td>
                </tr>
                <tr>
                    <td>LAB 8</td>
                    <td>Facial Recognition</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM08_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 8</div></a></td>
                </tr>
                <tr>
                    <td>LAB 9</td>
                    <td>Virtual Desktop Using VNC in RPi</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM09_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 9</div></a></td>
                </tr>
                <tr>
                    <td>LAB 10</td>
                    <td>Password Manager</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM10_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 10</div></a></td>
                </tr>
                <tr>
                    <td>LAB 11</td>
                    <td>NAS</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM11_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 11</div></a></td>
                </tr>
                <tr>
                    <td>LAB 12</td>
                    <td>Video Conferencing</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM12_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 12</div></a></td>
                </tr>
                <tr>
                    <td>LAB 13</td>
                    <td>Retro Pi</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabM13_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 13</div></a></td>
                </tr>
                <tr>
                    <td>LAB 14</td>
                    <td>Building Active Directory</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabF14_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 14</div></a></td>
                </tr>
                <tr>
                    <td>LAB 15</td>
                    <td>Building Windows Web Server</td>
                    <td><a href="./laboratories/SNA1_StudyGuide_LabF15_Cerujano.pdf" target="_blank"><div class="dl">Laboratory 15</div></a></td>
                </tr>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script.js"></script>
</body>
</html>