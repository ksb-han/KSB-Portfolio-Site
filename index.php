<?php
$descriptiontag = "Home page for Kyle Sean Barnes' professional web development portfolio showcasing 
creative projects, skills, and experience. Explore my work and get in touch for collaboration opportunities.";
$pageTitle = "Home";
// HEADER INCLUSION
include("components/navigation.php");
?>
<div class="bg">

    <div class="container" id="home">
        <div class="two-columns">
            <div class="glassobox">
                <h1>Kyle Sean Barnes</h1>
                <h2>Web Design & Development, UX Design, Graphic Design</h2>
                <p>I have a passion for creating vibrant and visually interesting interfaces, I love learning new skills and trying to apply them to my websites. I have developed websites using just the basics, as well as using frameworks like Bootstrap. I employ tools like SASS in my workflow, I am proficient with photoshop, illustrator and other graphics creation softeware.
                    <br><br>
                    Databases fascinate me and I am excited to get my hands dirty working with more complicated database systems. I love working with dynamically generated content and I am dipping my toes into creating websites that deploy user-generated content to the live site.
                </p>
            </div>
            <div class="glassobox">
                <h2>My Latest Website!</h2>
                <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "autoPlay": true, "wrapAround": true  }'>

                    <div class="carousel-cell"><img src="./images/LLCindex.jpg" alt="Screenshot of the index page of my limelight cinema website"></div>
                    <div class="carousel-cell"><img src="./images/LLCindex2.jpg" alt="Screenshot of the index page of my limelight cinema website"></div>
                    <div class="carousel-cell"><img src="./images/LLCmovie.jpg" alt="Screenshot of the movies page of my limelight cinema website"></div>

                </div>
            </div>

        </div>


    </div>
    <!-- END OF HOME SECTION -->

    <!-- COMMERCIAL SECTION -->
    <div class="container_ripped">
        <div class="two-columns topbot_padding container">
            <div>
                <h2>Kyle Sean Barnes</h2>
                <h3>Web Design & Development, UX & Graphic Design</h3>
                <p>As a Student at Edinburgh College since 2021, I have honed my skills in many areas of design and webs development, learning tools and langauges that help me create the things that I want and need to create.</p>
            </div>

            <div>
                <h3 class="skills-header">Services I Offer</h3>
                <ul class="skills-list">
                    <li>Web Design</li>
                    <li>Web Development</li>
                    <li>UX Design</li>
                    <li>Graphic Design</li>
                    <li>Database Design</li>
                    <li>Web Hosting</li>
                </ul>
                <h3 class="skills-header">Languages & Tools I Utilize</h3>
                <!-- List of Languages & Tools that I use -->
                <ul class="skills-list">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>PHP</li>
                    <li>JavaScript</li>
                    <li>Python</li>
                    <li>SQL</li>
                    <li>Bootstrap</li>
                    <li>SASS</li>
                    <li>Flickity</li>
                    <li>jQuery</li>
                    <li>Git</li>
                    <li>GitHub</li>
                    <li>WordPress</li>
                    <li>MySQL</li>
                    <li>React</li>
                    <li>Node.js</li>
                    <li>Next.js</li>
                </ul>
                <!-- List of Tools that I use -->
                <ul class="skills-list">
                    <li>Visual Studio Code</li>
                    <li>Photoshop</li>
                    <li>Illustrator</li>
                    <li>Figma</li>
                    <li>FileZilla</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include("about.php") ?>
    <?php include("portfolio.php") ?>
    <?php include("contact.php") ?>
    <?php include("components/footer.php") ?>