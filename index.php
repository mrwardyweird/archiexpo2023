<?php
$_SESSION["page"] = "home";
require_once "nav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCHIEXPO 2023</title>
    <link href="assets/LOGO ARCHIEXPO.png" rel="icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <script src="https://kit.fontawesome.com/acc3ee9eed.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/kute.js@2.1.2/dist/kute.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>



    <section class="content" style="margin-top: 20px; overflow-x: hidden;">
        <div class="text">
            <h1 class="title">
                <span>Explore &</span><br>
                <span>Join us on</span><br>
                <span class="arc">Our Events</span>
            </h1>
        </div>
        <div class="img_group">
            <div class="img_group_inner">
                <img src="assets/Poster ARCHFEST .jpg" alt="">
                <img src="assets/POSTER ASF.jpg" alt="">
                <img src="assets/POSTER GADA 2023.jpg" alt="">
                <img src="assets/POSTER LKTI 2023.jpg" alt="">
                <img src="assets/poster archiexpo FIX.jpg" alt="">
            </div>
        </div>


    </section>
    <div class="spacer layer1"> </div>
    <section class="bubble">
        <div class="bottom_text">
            <h5>Welcome to archiexpo 2023</h5>
        </div>
    </section>
    <section class="dark">

        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex  justify-content-center ">
                    <div class="card m-2 cb1 text-center">
                        <div class="row">
                            <div class="col md-6 lg-12" style="margin-top: 10vh;">
                                <img src="assets/LOGO ARCHIEXPO.png" width="400vh" alt="" id="logocard">
                            </div>
                            <div class="col md-6 lg-12">
                                <div class="card-body">
                                    <span class="card-number fw-bold" style="font-family: a1; letter-spacing: 1px;">About Us</span>
                                    <h2 class="card-title mb-4" style="margin-top: 12vh; font-family: a1; letter-spacing: 2px;">ARCHIEXPO 2023</h2>
                                    <p class="card-text">
                                    The Architecture Expo 2023 Design Competition is a competition held by Architecture Expo to produce unique, interesting and fascinating exhibition designs. This national level competition has been held year after year by HIMAARTRA. With the theme of this year's contest, "Sustainable Architecture: Road to Utopia", the participants were invited to be aware of the importance of sustainable elements in their designs. In addition to the participants designing the exhibition, we want them to take home some important lessons that they can apply in each of their designs
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="dark" id="s-event">

        <h1 style="font-family: a1;">Events</h1>
        <div class="event-wrap">
            <div class="d-flex flex-wrap justify-content-center event">
                <div class="cardm">
                    <img src="assets/POSTER ASF.jpg" alt="">
                    <div class="content">
                        <H1>ASF</H1>
                        <button class="btn" id="ASF-btn"><a class="regist">More Information</a></button>
                        <button class="btn"><a href="http://petra.id/pendaftaranASF2023" class="regist">Registration</a></button>
                    </div>
                </div>
                <div class="cardm">
                    <img src="assets/Poster ARCHFEST .jpg" alt="">
                    <div class="content">
                        <H1>ARCHFEST</H1>
                        <button class="btn" id="Archfest-btn"><a class="regist">More Information</a></button>
                        <button class="btn"><a href="http://petra.id/NormalRegistrationArchfest2023" class="regist">Registration</a></button>
                    </div>
                </div>
                <div class="cardm">
                    <img src="assets/POSTER GADA 2023.jpg" alt="">
                    <div class="content">
                        <H1>GADA</H1>
                        <button class="btn" id="GADA-btn"><a class="regist">More Information</a></button>
                        <button class="btn"><a href="https://petra.id/RegistrationGADA2023" class="regist">Registration</a></button>
                    </div>
                </div>
                <div class="cardm">
                    <img src="assets/POSTER LKTI 2023.jpg" alt="">
                    <div class="content">
                        <H1>SANKLTI</H1>
                        <button class="btn" id="SANKLTI-btn"><a class="regist">More Information</a></button>
                        <button class="btn"><a href="https://linktr.ee/SANXLKTI2023" class="regist">Registration</a></button>
                    </div>
                </div>
                <div class="cardm">
                    <img src="assets/poster archiexpo FIX.jpg" alt="">
                    <div class="content">
                        <H1>EXPO</H1>
                        <button class="btn" id="EXPO-btn"><a class="regist">More Information</a></button>
                        <button class="btn"><a href="https://linktr.ee/archiexpopcu" class="regist">Registration</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark">
        <h1 style="font-family: a1;">Contact Us</h1>
        <!-- <p>Nesciunt, distinctio itaque quam labore corporis architecto minima. Odit expedita incidunt ea corporis sunt
            molestiae neque earum, eos accusamus voluptatum nam dolorum alias repellendus cupiditate? Impedit delectus
            architecto laborum deserunt.</p> -->
        <div class="wrapper" style="margin-top: 50px;">
            <div class="button">
                <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=469wztcb" style="text-decoration: none; color: black" target="_blank">
                    <div class="icon">
                        <i class="fa-brands fa-line"></i>
                    </div>
                    <span>Line</span>
                </a>
            </div>

            <div class="button">
                <a href="https://instagram.com/archiexpo.ukp?igshid=NDk5N2NlZjQ=" style="text-decoration: none; color: black" target="_blank">
                    <div class="icon">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <span>Instagram</span>
                </a>
            </div>

            <div class="button">
                <a href="https://www.tiktok.com/@archiexpo.ukp?_t=8ZQy2eEak0A&_r=1" style="text-decoration: none; color: black" target="_blank">
                    <div class="icon">
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                    <span>TikTok</span>
                </a>
            </div>
        </div>

    </section>

    <section class='footer'>
        <h2 class='my-5' style="font-family: a1;">SPONSORED BY</h2>
        <div class="sponsor mb-5">
            <div class="isi">
                <img class="image" src="assets/Group 1.png" alt="">
                <img class="image" src="assets/city.png" alt="">
                <img class="image" src="assets/bg 1.png" alt="">
                <img class="image" src="assets/bg.png" alt="">
                <img class="image" src="assets/POSTER ASF.jpg" alt="">
            </div>
        </div>
        <div class="copyright mb-5">
        
        
            <h5 style="font-family: a1; letter-spacing: 1px;font-size: 10px;">&copy; IT ARCHIEXPO 2023</h5>
        </div>
    </section>

    <div id="ASF-modal" class="modal" active="false">
        <div class="modal-contents ASF">
            <div class="bg-ASF"></div>
            <div class="contents">
                <span class="close">&times;</span>
                <div class="menu">
                    <div class="container-timeline ASF-scroll" id="timeline">
                        <div class="top-section">
                            <h1>About Us</h1>

                            <p>Architectural Sketch Fair is a National Architectural Sketch competition where the participant are required to think, 
                                and sharpen their skill in sketch. This year’s Architectural Sketch Fair or better known as ASF comes up with theme
                                 “ A Notion For Substantial Change”.
                                  In hope that with this theme the colleger will gain the ambitious to compete and criticize about the existing problem in a building. </p>

                            <h1>ASF Timeline</h1>
                        </div>
                        <div>

                        </div>
                        <div class="timeline">
                            <div class="line"></div>
                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 16, 2022 - January 8, 2023</h2>
                                    <p>
                                        EARLY BIRD REGISTRATION
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>January 9, 2023 - January 31, 2023</h2>
                                    <p>
                                        NORMAL REGISTRATION
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 1, 2023 - March 3, 2023</h2>
                                    <p>
                                        PROJECT SUBMISSION
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 14, 2023</h2>
                                    <p>
                                        AWARDING NIGHT
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-section">
                            <h1>Contact Us</h1>
                            <p>
                                Line : @249oymhc
                                <br>
                                Instagram : @asf_petra
                                <br>
                                Email : architecturalsketchfair@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="Archfest-modal" class="modal" active="false">
        <div class="modal-contents Archfest">
            <div class="bg-Archfest"></div>
            <div class="contents">
                <span class="close">&times;</span>
                <div class="menu">
                    <div class="container-timeline Archfest-scroll" id="timeline">
                        <div class="top-section">
                            <h1>About Us</h1>

                            <p>Architecture Festival or usually known as ARCHFEST is an international architectural design competition where each year the participants are challenged to create 
                                innovative solutions to solve problems within the scope of the competition theme. This year's Architecture festival theme “Building Society” highlights the benefits
                                 of having a calculated floor plan on a multi dwelling unit that can have  a positive impact on how the society within that building is created. For example, 
                                 the use of a courtyard or community center within that multi dwelling unit can elevate the connectivity relation between occupants.  
                                 Besides the occupants, the building itself must be well planned, where the usage of sustainable material is also needed to create a sustainable building design 
                                 to emphasize a utopian environment within that building. Thus, this theme strives to increase the participants knowledge and understanding towards the potential 
                                 of a well planned and calculated floor planning, material,
                                 and the usage of rooms/area in a building design.</p>

                            <h1>ARCHFEST Timeline</h1>
                        </div>
                        <div class="timeline">
                            <div class="line"></div>
                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 19, 2022 - January 31, 2022</h2>
                                    <p>
                                        Pendaftaran Early Bird Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>January 1, 2023 - January 31, 2023</h2>
                                    <p>
                                        Pendaftaran Normal Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>January 1, 2023 - Februari 11, 2023</h2>
                                    <p>
                                        Pengumpulan Karya (Online) Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 21, 2023</h2>
                                    <p>
                                        Penjurian Tertutup Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 23, 2023</h2>
                                    <p>
                                        Pengumuman Top 25 Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 25, 2023</h2>
                                    <p>
                                        Pengumuman Top 5 Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 11, 2023</h2>
                                    <p>
                                        Presentasi Final Architecture festival Ke-16
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 14, 2023</h2>
                                    <p>
                                        Pengumuman Pemenang Architecture Festival Ke-16
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-section">
                            <h1>Contact Us</h1>
                            <p>
                                Line :
                                <br>
                                sebastianus553(Sebastianus E.) anggarda.hanjaya (Anggarda)
                                <br>
                                Instagram : @archfest_petra
                                <br>
                                Email : architecturefest@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="GADA-modal" class="modal" active="false">
        <div class="modal-contents GADA">
            <div class="bg-GADA"></div>
            <div class="contents">
                <span class="close">&times;</span>
                <div class="menu">
                    <div class="container-timeline GADA-scroll" id="timeline">
                        <div class="top-section">
                            <h1>About Us</h1>

                            <p>Geest Van De Architectuur (GADA) is an International Photography Competition. This competition may serve as a reference for developing
                                 sustainable architectural designs ideas, as well as a means to learn good architectural photography techniques. Through this year's theme,
                                  "URBAN's OASE in Frame", it is hoped that the participants will attain knowledge in how to create a "Green Building" concept that
                                   have a positive impact to the surrounding environment while they practice their architecture photography skill. Geest Van De Architectuur 
                                   can be a forum for Architecture Students to compete in honing their photography skills and providing a better understanding regarding the
                                   buildings around them.</p>

                            <h1>GADA Timeline</h1>
                        </div>
                        <div class="timeline">
                            <div class="line"></div>
                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 19, 2022 - January 8, 2023</h2>
                                    <p>
                                        ONLINE REGISTRATION (EARLY BIRD)
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>January 9, 2023 - February 5, 2023</h2>
                                    <p>
                                        ONLINE REGISTRATION (NORMAL)
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>January 16, 2023 - February 11, 2023</h2>
                                    <p>
                                        FINAL SUBMISSION
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 17, 2023</h2>
                                    <p>
                                        CLOSSED ASSESSMENT
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 25, 2023</h2>
                                    <p>
                                        TOP 10 ANNOUNCEMENT
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 21, 2023</h2>
                                    <p>
                                        TOP 30 ANNOUNCEMENT
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 11, 2023</h2>
                                    <p>
                                        FINAL ROUND
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 14, 2023</h2>
                                    <p>
                                        BEDAH KARYA & ANNOUNCEMENT
                                    </p>
                                </div>
                            </div>

                        </div>

                        <div class="bottom-section">
                            <h1>Contact Us</h1>
                            <p>
                                Line : @008jdrhf @bella1632 @celine161
                                <br>
                                Instagram : @gada_petra
                                <br>
                                Email : gada.petra@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="SANKLTI-modal" class="modal" active="false">
        <div class="modal-contents SANKLTI">
            <div class="bg-SANKLTI"></div>
            <div class="contents">
                <span class="close">&times;</span>
                <div class="menu">
                    <div class="container-timeline SANKLTI-scroll" id="timeline">
                        <div class="top-section">
                            <h1>About Us</h1>

                            <p>Lomba Karya Tulis Ilmiah or usually known as LKTI, is an annual scientific paper competition where participants get 
                                the opportunity to present their innovations and discoveries regarding architectural priciples in the form of a scientific research paper.
                                 This year, LKTI came back with a topic surrounding the impact of construction towards this world, with the theme of "Prosperity or Survival?:
                                  Preventing World's Destruction Through Architecture". Participants are allowed to chose between 4 sub theme: Society, Environment, Crime and Security,
                                   and Urban Planning. This year's theme aim for it's participant to understand and to find a solution regarding the impact of mega construction towards 
                                   the world, therefore creating a better world for the generation to come.</p>

                            <h1>SANKLTI Timeline</h1>
                        </div>
                        <div class="timeline">
                            <div class="line"></div>
                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 19, 2022 - January 6, 2023</h2>
                                    <p>
                                        EARLY BIRD REGISTRATION LKTI
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>January 7, 2023 - February 1, 2023</h2>
                                    <p>
                                        NORMAL REGISTRATION LKTI
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 22, 2023 - February 4, 2023</h2>
                                    <p>
                                        PENGUMPULAN ABSTRAK
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 2, 2023 - February 11, 2023</h2>
                                    <p>
                                        PENJUARIAN ABSTRAK
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 13, 2023</h2>
                                    <p>
                                        PENGUMUMAN LOLOS
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 17, 2023 - March 10, 2023</h2>
                                    <p>
                                        PENGUMPULAN FULL PAPER
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 1, 2023 - March 12, 2023</h2>
                                    <p>
                                        EARLY BIRD REGISTRATION SAN
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 11, 2023 - March 20, 2023</h2>
                                    <p>
                                        PENJUARIAN TERTUTUP
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 13, 2023 - April 11, 2023</h2>
                                    <p>
                                        NORMAL REGISTRATION SAN
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 21, 2023</h2>
                                    <p>
                                        PENGUMUMAN FINALIS
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>April 15, 2023</h2>
                                    <p>
                                        SEMINAR ARSITEKTUR NASIONAL (7:45 - 11:15 WIB)
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>April 15, 2023</h2>
                                    <p>
                                        LOMBA KARYA TULIS ILMIAH (12.00 - 18:00 WIB)
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 14, 2023</h2>
                                    <p>
                                        PENGUMUMAN PEMENANG
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="bottom-section">
                            <h1>Contact Us</h1>
                            <p>
                                Line : @661jhbeu
                                <br>
                                Instagram : @san_petra
                                <br>
                                Email : sanukpetra@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="EXPO-modal" class="modal" active="false">
        <div class="modal-contents EXPO">
            <div class="bg-EXPO"></div>
            <div class="contents">
                <span class="close">&times;</span>
                <div class="menu">
                    <div class="container-timeline EXPO-scroll" id="timeline">
                        <div class="top-section">
                            <h1>About Us</h1>

                            <p>The Architecture Expo 2023 Design Competition is a competition held by Architecture Expo to produce unique, interesting and fascinating 
                                exhibition designs. This national level competition has been held year after year by HIMAARTRA. With the theme of this year's contest,
                                 "Sustainable Architecture: Road to Utopia", the participants were invited to be aware of the importance of sustainable elements in their designs.
                                  In addition to the participants designing the exhibition, we want them to take home some important lessons that they can apply in each 
                                  of their designs</p>

                            <h1>EXPO Timeline</h1>
                        </div>
                        <div class="timeline">
                            <div class="line"></div>
                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 19, 2022 - January 31, 2023</h2>
                                    <p>
                                        Open Registration Sayembara Desain Exhibition Architecture Expo 2022/2023
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>December 19, 2022 - January 31, 2023</h2>
                                    <p>
                                        Pengumpulan Karya Sayembara Desain Exhibition Architecture Expo 2022/2023
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 1, 2023</h2>
                                    <p>
                                        Penjurian Tertutup Sayembara Desain Exhibition Architecture Expo 2022/2023
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 4, 2023</h2>
                                    <p>
                                        Penjurian Terbuka Sayembara Desain Exhibition Architecture Expo 2022/2023
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>February 11, 2023</h2>
                                    <p>
                                        Pengumuman Sayembara Desain Exhibition Architecture Expo 2022/2023
                                    </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>March 6, 2023 - May 10, 2023</h2>
                                    <p>
                                        Open Registration Architalk Series and Workshop Architecture Expo 2022/2023 </p>
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 12, 2023</h2>
                                    <p>
                                        Day 1 ( Opening Ceremony, Seminar Arsitektur Nasional, LKTI x Expo )
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 13, 2023</h2>
                                    <p>
                                        Day 2 ( Bedah Karya dan Workshop ) Architecture Expo 2022/2023
                                </div>
                            </div>

                            <div class="section">
                                <div class="bead"></div>
                                <div class="content-timeline">
                                    <h2>May 14, 2023</h2>
                                    <p>
                                        Day 3 ( Bedah Karya dan Awarding Night ) Architecture Expo 2022/2023
                                </div>
                            </div>
                        </div>

                        <div class="bottom-section">
                            <h1>Contact Us</h1>
                            <p>
                                Line : @469wztcb
                                <br>
                                Instagram : @archiexpo.ukp
                                <br>
                                Email : archiexpopcu@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js" integrity="sha512-VJ/iYbiu1eJ6yLimfTi65t2R9TFcG5D9X8ZCfbbEFhTfPnKJh8byoKXEawi5ScJZBYL1eiirL1+MczZDx0Tz9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var windowsize = 2715;
        var windowsize3 = 360;
        // alert(windowsize);
        // alert($(window).width())

        $(document).ready(function() {
            $('.text h1 span,.bottom_text h5').lettering();
            var tl = gsap.timeline();


            $('#ASF-btn').click(function() {
                $("#ASF-modal").css("display", "block");
                $("body").css("overflow-y", "hidden");
            });

            $('#Archfest-btn').click(function() {
                $("#Archfest-modal").css("display", "block");
                $("body").css("overflow-y", "hidden");
            });

            $('#GADA-btn').click(function() {
                $("#GADA-modal").css("display", "block");
                $("body").css("overflow-y", "hidden");
            });

            $('#SANKLTI-btn').click(function() {
                $("#SANKLTI-modal").css("display", "block");
                $("body").css("overflow-y", "hidden");
            });

            $('#EXPO-btn').click(function() {
                $("#EXPO-modal").css("display", "block");
                $("body").css("overflow-y", "hidden");
            });

            $('.close').click(function() {
                $(".modal").css("display", "none");
                $("body").css("overflow-y", "visible");
            });

            $(document).click(function(e) {
                if (e.target == $("#ASF-modal")) {
                    $("#ASF-modal").css("display", "none");
                }
            })
            // window.onclick = function(event) {
            //     if (event.target == modal) {
            //         modal.style.display = "none";
            //     }
            // }

            tl.from(".img_group img", {
                    x: 1100,
                    duration: 1,
                    opacity: 0,
                    stagger: .14
                })
                .to(".img_group img", {
                    x: 1100,
                    margin: '0 -140px 0',
                    duration: 1,
                    opacity: 1,
                    rotate: 15,
                    stagger: .14
                }, '-=1.4')

            tl.from(".text h1 span", {
                    x: -20,
                    duration: 1,
                    opacity: 0,
                    stagger: .1
                })
                // .from(".img_group img", {
                //     x: 1100,
                //     duration: 1,
                //     opacity: 0,
                //     stagger: .14
                // })
                // .to(".img_group img", {
                //     x: 1100,
                //     margin: '0 -140px 0',
                //     duration: 1,
                //     opacity: 1,
                //     rotate: 15,
                //     stagger: .14
                // }, '-=1.4')
                .from(".bottom_text h5 span", {
                    x: 1100,
                    duration: 1,
                    opacity: 0,
                    stagger: .07
                })
                .from("header .logo", {
                    y: -20,
                    duration: 1,
                    opacity: 0,
                })
                .from("header nav li", {
                    y: -20,
                    duration: 1,
                    opacity: 0,
                    stagger: .07

                })
            setTimeout(function() {
                $(".arc").mouseover(function() {
                    gsap.to(".img_group img", {
                        x: 100,
                        margin: '0 10px 0',
                        duration: 1,
                        opacity: 1,
                        rotate: 0,
                        stagger: .14
                    })
                })
                $(".arc").mouseout(function() {
                    gsap.to(".img_group img", {
                        x: 1100,
                        margin: '0 -140px 0',
                        duration: 1,
                        opacity: 1,
                        rotate: 15,
                        stagger: .14
                    })
                })
            }, 500)

            // $(window).resize(function() {
            //     var windowsize2 = $(window).width();
            //     var check = Math.floor(Math.abs((windowsize - windowsize2) / 200))
            //     var check2 = Math.floor(Math.abs((windowsize2 - windowsize3) / 200))

            //     if ((windowsize - windowsize2) > 0) {
            //         var curleft = $('.img_group').css("left");
            //         // alert(parseFloat(curleft)+40)
            //         // var left = parseFloat(curleft) - (check * 66);
            //         var left = 240 - (check * parseFloat(200/3));

            //         var nl = String(left + "vh");
            //         // var nw = String(width + "%");
            //         // var ns = String("scale(" + scale +")");
            //         $('.img_group').css("left", nl);

            //         // $('.img_group').css({"left": nl, "width": nw, "transfrom": ns});
            //     }
            //     else if ((windowsize - windowsize2) < 0) {
            //         var curleft = $('.img_group').css("left");
            //         // var left = parseFloat(curleft) + (check * 66);
            //         var left = 40 + (check * parseFloat(200/3));

            //         var nl = String(left + "vh");
            //         // var nw = String(width + "%");
            //         // var ns = String("scale(" + scale +")");
            //         $('.img_group').css("left", nl);

            //         // $('.img_group').css({"left": nl, "width": nw, "transfrom": ns});
            //     }
            // })


            // $(window).resize(function() {
            //     var windowsize2 = $(window).width();
            //     // alert(windowsize - windowsize2)
            //     var check = Math.floor(Math.abs((windowsize - windowsize2) / 200))
            //     var check2 = Math.floor(Math.abs((windowsize2 - windowsize3) / 200))



            // if ((windowsize - windowsize2) > 0) {
            //     var left = 28 - (check * 8);
            //     var width = 80 + (check * 12);
            //     var scale = 1.4 - (check * 2);

            //     var nl = String(left + "vh");
            //     var nw = String(width + "%");
            //     var ns = String("scale(" + scale +")");

            //     $('.img_group').css({"left": nl, "width": nw, "transfrom": ns});
            // }
            // else if ((windowsize - windowsize2) < 0) {
            //     var left = -52 + (check2 * 8);
            //     var width = 200 - (check2 * 9);
            //     var scale = -18.6 + (check2 * 2);

            //     var nl = String(left + "vh");
            //     var nw = String(width + "%");
            //     var ns = String("scale(" + scale +")");

            //     $('.img_group').css({"left": nl, "width": nw, "transfrom": ns});
            // }
            // })

        })
    </script>
</body>

</html>