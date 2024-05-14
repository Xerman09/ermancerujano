<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePortfolio</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Design.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration:none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: "Poppins", "sams-serif";
}

:root{
    --bg-color: #fdfdfd;
    --second-bg-color: #323946;
    --text-color:#333;
    --main-color: #162D5D;
    --white-color: #fdfdfd;
    --shadow-color: rgba(0,0,0,0.2);
    --firstcolor: #0D1B2A;
    --secondcolor: #1B263B;
    --thirdcolor: #415A77;
    --fourthcolor: #778DA9;
    --fifthcolor: #E0E1DD;
    --white: #F6F0E6;
}

html{
    font-size: 62.5%;
    overflow-x:hidden;

}

body{
    background: #fdfdfd;
    color: #333;
}

#myBtn {
    display: none; 
    position: fixed; 
    bottom: 20px; 
    right: 20px; 
    z-index: 99; 
    border: 1px solid var(--main-color); 
    outline: none; 
    background-color: white; 
    color: var(--main-color); 
    cursor: pointer; 
    font-size:30px;
    border-radius: 10px; 
    width: 60px;
    height: 55px;
  }
  
  #myBtn:hover {
    background-color:var(--main-color);
    color: white;
  }
.container{
    top:0;
    
}
.header{
    position: fixed;
    top: 0;
    left:0;
    width: 100%;
    padding: 2rem 9%;
    display: flex;
    align-items: center;
    z-index: 100;
    border-bottom: 1px solid;
    border-color:var(--main-color);
    box-shadow: 0 .2rem .5rem var(--shadow-color);
    background-color: #fdfdfd;
}


.logo{
    padding-left: 40px;
    font-size: 2.5rem;
    color: var(--main-color);
    font-weight: 600;
    cursor: default;
    margin-right: auto;
    animation: slideRight 1s ease forwards;
}

.nav a{
    padding: 5px 10px;
    display: inline-block;
    position: relative;
    font-size: 1.7rem;
    color: var(--main-color);
    font-weight:500;
    margin-right: 3.5rem;
    border: 1px solid transparent;
    border-style: solid 1px;
    border-width: auto;
    opacity:0;
    animation: slideTop 0.5s ease forwards;
    animation-delay: calc(.2s * var(--i));
}

.nav a.active{
    font-weight: 700;
}
.nav a.active::before {
    content: '';
    position: absolute;
    left:0;
    bottom: -6px;
    width: 100%;
    height: 0.2rem;
    background: var(--main-color);
}

.nav a:hover {
    padding: 5px 10px;
    color:var(--main-color);
    border: 1px solid var(--main-color);
    background: var(--main-color);
    border-radius: 15px;
    color: white;
}

#LightMode{
    font-size: 2.4rem;
    color: var(--main-color);
    cursor: pointer;
    opacity:0;
    animation: slideTop 0.5s ease forwards;
    animation-delay: calc(1.2s);
}


nav a::after{
    content: '';
    width: 0;
    height: 3px;
    background: var(--firstcolor);
    position: absolute;
    left: 0;
    bottom: -6px;
    transition: 0.3s;
}

nav a:hover::after{
    width: 100%;
}


box{
    min-height: 100vh;
    padding: 10rem 7% 2rem;
}

.Home{
    display: flex;
    align-items: center;
}

.hcontent{
    width: 50%;
}

.hcontent h3{
    font-size: 3.2rem;
    font-weight: 700;
    line-height: .3;
    opacity:0;
    animation: slideBottom 1s ease forwards;
    animation-delay: .5s;
}

.hcontent h3 span{
    color: var(--main-color);
}

.hcontent h1{
    font-size: 5.6rem;
    font-weight: 700;
    margin-bottom: 0.3rem;
    opacity:0;
    animation: slideRight 1s ease forwards;
    animation-delay: .5s;
}

.hcontent p{
    font-size: 1.6rem;
    opacity:0;
    animation: slideLeft 1s ease forwards;
    animation-delay: .5s;
    
}

.socialmediaacc a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    background: transparent;
    border: 0.2rem solid var(--main-color);
    border-radius: 50%;
    box-shadow: 0 .2rem .5rem rgba(0,0,0,0.2);
    font-size: 2rem;
    color: var(--main-color);
    margin: 2.5rem 1.5rem 3rem 0;
    animation: slideLeft 1s ease forwards;
    opacity: 0;
    animation-delay: calc(0.1s*var(--i));
}

.hcontent .socialmediaacc a:hover{
    background: var(--main-color);
    color: white;
}

.button{
    display:inline-block;
    padding: 1rem 2rem;
    margin-left: 50px;
    background: var(--main-color);
    border-radius: 15px;
    box-shadow: 0 .2rem .5rem var(--shadow-color);
    border: 1px solid var(--main-color);
    font-size: 1.6rem;
    color: white;
    letter-spacing: .1rem;
    font-weight: 600;
    transition: .5s ease;
    animation: slideTop 1s ease forwards;
    opacity: 0;
    animation-delay: 1.5s;
}

.button:hover{
    background: transparent;
    color: var(--main-color);
    border: 1px solid var(--main-color);

}

.home .profile{
    position: absolute;
    top: 50%;
    right: 0;
    transform: translate;
}

.profilepicture{
    position:absolute;
    bottom:0;
    right:3%;
    width:50%;
    height:100%;

}

.profilepicture img {
    position: absolute;
    bottom: 0;
    right: 0;
    max-width: 100%;
    height: auto;
    opacity: 0;
    animation: slideTop 1s ease forwards;
    animation-delay: 1.75s;
}

.heading{
    font-size: 4.5rem;
    text-align: center;
}

span{
    color: var(--main-color);
}

.Services{
    padding: 80px 0;
    background: #d4eaf7;
    min-height: 100vh;
    padding: 10rem 7% 2rem;
}

.scontainer{
    padding: 2rem 9%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap:wrap;
    gap: 2rem;
}

.scontainer .sbox{
    flex: 1 1 30rem;
    background: #fdfdfd;
    padding: 3rem 2rem 4rem;
    border-radius: 2rem;
    box-shadow: 0 0.1rem 0.5rem var(--shadow-color);
    text-align: center;
    border-top: 0.6rem solid var(--main-color);
    border-bottom: 0.6rem solid var(--main-color);
    transition: .5s ease;
}

.scontainer .sbox:hover{
    border: 2px solid var(--main-color);
    transform: scale(1.02);
}

.sbox i{
    font-size: 7rem;
    color: var(--main-color);
}

.sbox h3{
    font-size: 2.6rem;
}

.sbox p{
    font-size: 1.6rem;
    margin: 1rem 0 3rem;
}

.Services h2{
    margin-bottom: 5rem;
}




/* ----- ABOUT ----- */
.About{
    padding: 80px 0;
    background: #ECF3F9;
}

.row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.aboutimg{
    flex-basis: 35%;
}

.aboutimg img{
    width: 100%;
}

.aboutme{
    flex-basis: 60%;
}

.aboutme p{
    font-size: 1.6rem;
    margin: 1rem 0 3rem;
}

.abt-titles{
    display: flex;
    margin: 20px 0 0px;
}

.abt-titles p{
    opacity:0;
    animation: slideTop 0.5s ease forwards;
    animation-delay: calc(.2s * var(--i));
}

.abt-titles .abt-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
    border: 1px solid transparent;
    border-radius: 15px;
    padding: 5px 10px;
}

.abt-titles .abt-links:hover{
    border: 1px solid var(--main-color);
    background-color: var(--main-color);
    color: white;
    border-radius: 15px;
    padding: 5px 10px;
}

.abt-links::after{
    content: "";
    width: 0;
    height: 3px;
    background: var(--main-color);
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.5s;
}

.abt-links.active::after{
    width: 100%;

}

.abt-contents{
    overflow-y: auto;
    bottom: 0;
    height: 500px;
}
.abt-contents ul li{
    list-style: none;
    margin: 10px 0;
}

.abt-contents ul li span{
    color:var(--main-color);
    font-size: 20px;
    font-weight: 700;
}

.abt-contents ul li p{
    color: black;
    font-size: 18px;
    margin-left: 40px;
    margin-right: 40px;
}

.abt-contents ul li a{
    text-decoration: none;
    font-size: 18px;
}
.abt-contents ul li p b{
    font-weight: 700;
}

.abt-contents{
    display: none;
}

.abt-contents.active{
    display: block;

}

.abutton{
    text-decoration: none;
    color: white;
    background: #162D5D;
    padding: 10px 20px;
    border: 1px solid white;
    border-radius: 15px;
}

.abutton i{
    padding-right: 10px;
}

.abutton:hover{
    color: #162D5D;
    background: white;
    border: 2px solid #162D5D;

}

/* MY CERTIFICATES*/
#certificates{
    padding: 100px ;
    background-color: #f1f1f1;
}

.certificates-list{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
}

.certificates{
    position: relative;
    overflow: hidden;
}

.certificates img{
    width: 100%;
    display: block;
}

.layer{
    width: 100%;
    height: 0;
    background: linear-gradient(rgba(0,0,0,0.6), var(--secondcolor));
    position: absolute;
    left: 0;
    bottom: 0;
    overflow: hidden;
    color: white;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    transition: height 0.5s;
}

.layer h3{
    margin-top: 70px;
    font-weight: 700;
    margin-bottom: 20px;
    font-size: 20px;

}

.layer p{
    margin-bottom: 20px;
    font-size: 14px;
}


.certificates:hover .layer{
    height: 100%;
}

.cert-button{
    display:inline-block;
    padding: 1rem 2rem;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 .2rem .5rem var(--shadow-color);
    border: 1px solid var(--main-color);
    font-size: 1.6rem;
    color: black;
    letter-spacing: .1rem;
    font-weight: 600;
    transition: .5s ease;
    animation: slideTop 1s ease forwards;
    opacity: 0;
    animation-delay: 0.5s;
}

.cert-button:hover{
    background: var(--main-color);
    color: white;
    border: 1px solid var(--main-color);

}






/* Portfolio */

.Prow{
    padding: 3% 15%;
    display: flex;
    flex-wrap:wrap;
    gap: 2rem;
    float: center;
}

.project{
    border: 1px solid black;
    padding: 5% 5%;
    width: 100%;
    height: 80%;
    border-radius: 20px;
    background: #fdfdfd;
    box-shadow: 10px 10px var(--main-color);
}

.project .picture{
    float: left;
    border: 1px solid var(--main-color);
    border-radius: 15px;
    width: 40%;
    height: 275px;
}

.picture img{
    border-radius: 4px;
    padding: 5px;
    width: 100%;
    max-height: 275px;
}
.project .Description{
    padding: 2%;
    float: left;
    width: 60%;
    height: 275px;
}

.project .Description span{
    color:var(--main-color);
    font-size: 22px;
    font-weight: 700;
}

.project .Description p{
    margin-top: 15px;
    font-size: 1.6rem;
    text-align: justify;
}

.project .Description b{
    font-weight: 700;
}

/* CONTACT INFORMATION */
#contact{
    padding: 10%;
    background: var(--fourthcolor);
}
.contactinfo{
    flex-basis: 35%;
}
.contactform{
    flex-basis: 50%;
}

.contactinfo p{
    margin-top: 30px;
}

.contactinfo p i{
    color: var(--secondcolor);
    margin-right: 15px;
    font-size: 25px;
}

.social{
    margin-top: 30px;

}

.social a{
    text-decoration: none;
    font-size: 25px;
    margin-right: 15px;
    color: var(--secondcolor);
    display: inline-block;
    transition: transform 0.5s;
    padding: 13px;
    border-radius: 50%;
    border: 1px solid black;
}

.social a:hover {
    color: white;
    transform: translateY(-5px);
}

.btn.btn2{
    display: inline-block;
    background: var(--firstcolor);
}

.contactform form{
    width: 100%;
}

form input, form textarea{
    width: 100%;
    border: 0;
    outline: none;
    background: white;
    padding: 15px;
    margin: 15px 0;
    color: var(--firstcolor);
    font-size: 18px;
    border-radius: 6px;

}

form btn2{
    padding: 14px 60px;
    font-size: 18px;
    margin-top: 20px;
    cursor: pointer;

}

.copyright{
    width: 100%;
    text-align: center;
    padding: 25px 0;
    background: var(--firstcolor);
    font-weight: 300;
    margin-top: 20px;
    padding: -50px;
}

table {
    font-family: arial, sans-serif;
    font-size: 25px;
    font-weight: 700;
    color: var(--main-color);
    border-collapse: collapse;
    width: 100%;

    }

    tr{
        border: 2px solid black;
    }
     th {
        border: 2px solid var(--main-color);
    text-align: left;
    padding: 8px;
    text-align: center;
    background-color: var(--thirdcolor);
    color: white;
    }

    td{
    border: 2px solid var(--main-color);
    text-align: left;
    padding: 8px;
    font-size: 20px;
    font-weight: 500;
    padding: 20px 15px;
    }

    tr:nth-child(even) {
    background-color: white;
    }
    td a .dl{
        border: 2px solid var(--main-color);
        padding: 5px;
        border-radius: 15px;
        background: white;
        text-align: center;
        width: 250px;
        margin: auto;
        text-decoration: none;
        color: var(--main-color);
        font-weight: 700;
        
    }
    td a .dl:hover{
        border: 2px solid white;
        padding: 5px;
        border-radius: 15px;
        background: var(--main-color);
        color: white;
        font-weight: 700;
    }

.snaTab span{
    font-size: 25px;
    margin-bottom: 15px;
    font-weight: 700;
}







/*SCROLL BAR CSS*/

/* width */
::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: var(--fourthcolor); 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: var(--thirdcolor); 
  }




@keyframes slideRight {
    0%{
        transform: translateX(-100px);
        opacity:0;
    }
    
    100%{
        transform: translateX(0);
        opacity:1;
    }
}

@keyframes slideLeft {
    0%{
        transform: translateX(100px);
        opacity:0;
    }
    
    100%{
        transform: translateX(0);
        opacity:1;
    }
}

@keyframes slideTop {
    0%{
        transform: translateY(100px);
        opacity:0;
    }
    
    100%{
        transform: translateY(0);
        opacity:1;
    }
}

@keyframes slideBottom {
    0%{
        transform: translateY(-100px);
        opacity:0;
    }
    
    100%{
        transform: translateY(0);
        opacity:1;
    }
}

@keyframes zoomIn {
    0%{
        transform: scale(0);
        opacity:0;
    }
    
    100%{
        transform: scale(1);
        opacity:1;
    }
}


    </style>
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
