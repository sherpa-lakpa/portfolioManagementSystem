<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav fontEn">
                    <li class="<?php echo basename($_SERVER["REQUEST_URI"], ".php") == "index" ? "active" : ""; ?>">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="<?php echo basename($_SERVER["REQUEST_URI"], ".php") == "message" ? "active" : ""; ?>">
                        <a href="message.php"><i class="fa fa-fw fa-envelope"></i> Message</a>
                    </li>
                    <li class="<?php echo basename($_SERVER["REQUEST_URI"], ".php") == "portfolio" ? "active" : ""; ?>">
                        <a href="portfolio.php"><i class="fa fa-fw fa-bar-chart-o"></i> Portfolio</a>
                    </li>
                    <li class="<?php echo basename($_SERVER["REQUEST_URI"], ".php") == "skill" ? "active" : ""; ?>">
                        <a href="skill.php"><i class="fa fa-fw fa-wrench"></i> Skill</a>
                    </li>
                    <li class="<?php echo basename($_SERVER["REQUEST_URI"], ".php") == "testimonial" ? "active" : ""; ?>">
                        <a href="testimonial.php"><i class="fa fa-fw fa-file"></i> Testimonial</a>
                    </li>
                    <li class="<?php if (basename($_SERVER["REQUEST_URI"], ".php") == "education" || basename($_SERVER["REQUEST_URI"], ".php") == "work") {
                        echo "active";
                    } ?>">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Experience <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="education.php"><i class="fa fa-fw fa-edit"></i> Education</a>
                            </li>
                            <li>
                                <a href="work.php"><i class="fa fa-fw fa-desktop"></i> Work</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>