<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("assets/header.php");
    ?>
    <link rel="stylesheet" href="css/gallery.css">

    
</head>

<body>
    <?php
    include("assets/navbar.php");
    ?>




    <section class="gallery_sec">
        <div class="gallery_sec_banner">
            <div class="container">
                <h2>Gallery</h2>
                <p><a href="index"> <i class="fa fa-home"></i> Home </a> / <a>Gallery </a></p>
            </div>
        </div>
    </section>

    <section class="tab_section">
        <div class="container">
            <h2>Our Gallery</h2>
            <center>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'allProjects')" id="defaultOpen">All Projects</button>
                    <button class="tablinks" onclick="openCity(event, 'residential')">Residential Project</button>
                    <button class="tablinks" onclick="openCity(event, 'commercial')">Commercial Project</button>
                    <button class="tablinks" onclick="openCity(event, 'onGoing')">On Going Project</button>
                    <button class="tablinks" onclick="openCity(event, 'complete')">Complete Project</button>
                </div>
            </center>

            <div id="allProjects" class="tabcontent active">

                <div class="row mt-2">
                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res.webp" src="images/gallery/res.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res2.webp" src="images/gallery/res2.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res3.webp" src="images/gallery/res3.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res4.webp" src="images/gallery/res4.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res5.webp" src="images/gallery/res5.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res6.webp" src="images/gallery/res6.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res7.webp" src="images/gallery/res7.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res8.webp" src="images/gallery/res8.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res9.webp" src="images/gallery/res9.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res10.webp" src="images/gallery/res10.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res11.webp" src="images/gallery/res11.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res12.webp" src="images/gallery/res12.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>



                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com.webp" src="images/gallery/com.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com2.webp" src="images/gallery/com2.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com3.webp" src="images/gallery/com3.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com4.webp" src="images/gallery/com4.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com5.webp" src="images/gallery/com5.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com6.webp" src="images/gallery/com6.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com7.webp" src="images/gallery/com7.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com8.webp" src="images/gallery/com8.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong.webp" src="images/gallery/ong.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong2.webp" src="images/gallery/ong2.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong3.webp" src="images/gallery/ong3.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong4.webp" src="images/gallery/ong4.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong5.webp" src="images/gallery/ong5.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong6.webp" src="images/gallery/ong6.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong7.webp" src="images/gallery/ong7.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong8.webp" src="images/gallery/ong8.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong9.webp" src="images/gallery/ong9.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong10.webp" src="images/gallery/ong10.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong11.webp" src="images/gallery/ong11.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong12.webp" src="images/gallery/ong12.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>



                </div>

            </div>

            <div id="residential" class="tabcontent">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res.webp" src="images/gallery/res.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res2.webp" src="images/gallery/res2.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res3.webp" src="images/gallery/res3.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res4.webp" src="images/gallery/res4.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>


                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res5.webp" src="images/gallery/res5.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res6.webp" src="images/gallery/res6.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res7.webp" src="images/gallery/res7.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res8.webp" src="images/gallery/res8.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>


                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res9.webp" src="images/gallery/res9.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res10.webp" src="images/gallery/res10.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res11.webp" src="images/gallery/res11.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>

                        <div class="col-md-3">
                            <img loading="lazy" data-src="images/gallery/res12.webp" src="images/gallery/res12.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                        </div>


                    </div>
                </div>
            </div>

            <div id="commercial" class="tabcontent">
                <div class="row mt-2">


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com.webp" src="images/gallery/com.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com2.webp" src="images/gallery/com2.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com3.webp" src="images/gallery/com3.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com4.webp" src="images/gallery/com4.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com5.webp" src="images/gallery/com5.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com6.webp" src="images/gallery/com6.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com7.webp" src="images/gallery/com7.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com8.webp" src="images/gallery/com8.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>




                </div>
            </div>

            <div id="onGoing" class="tabcontent">
                <div class="row mt-2">


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong.webp" src="images/gallery/ong.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong2.webp" src="images/gallery/ong2.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong3.webp" src="images/gallery/ong3.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong4.webp" src="images/gallery/ong4.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong5.webp" src="images/gallery/ong5.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong6.webp" src="images/gallery/ong6.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong7.webp" src="images/gallery/ong7.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong8.webp" src="images/gallery/ong8.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong9.webp" src="images/gallery/ong9.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong10.webp" src="images/gallery/ong10.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong11.webp" src="images/gallery/ong11.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/ong12.webp" src="images/gallery/ong12.webp" alt="on Going TIFDEVELOPERS Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>



                </div>
            </div>

            <div id="complete" class="tabcontent">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res.webp" src="images/gallery/res.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res2.webp" src="images/gallery/res2.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res3.webp" src="images/gallery/res3.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res4.webp" src="images/gallery/res4.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res5.webp" src="images/gallery/res5.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res6.webp" src="images/gallery/res6.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res7.webp" src="images/gallery/res7.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res8.webp" src="images/gallery/res8.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res9.webp" src="images/gallery/res9.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res10.webp" src="images/gallery/res10.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res11.webp" src="images/gallery/res11.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/res12.webp" src="images/gallery/res12.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com.webp" src="images/gallery/com.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com2.webp" src="images/gallery/com2.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com3.webp" src="images/gallery/com3.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com4.webp" src="images/gallery/com4.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com5.webp" src="images/gallery/com5.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com6.webp" src="images/gallery/com6.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com7.webp" src="images/gallery/com7.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>

                    <div class="col-md-3">
                        <img loading="lazy" data-src="images/gallery/com8.webp" src="images/gallery/com8.webp" alt="Residential Project" width="274" height="200" onclick="openModal(this.src)">
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Project Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Project Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Trigger the default open tab on page load
        document.getElementById("defaultOpen").click();

        // Open modal function
        function openModal(imageSrc) {
            document.getElementById("modalImage").src = imageSrc;
            $('#imageModal').modal('show');
        }
    </script>


    <?php
    include("assets/footer.php");
    ?>

</body>

</html>