<div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#">InterviewBox</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="">Hi, <?php echo $_POST['name'];?></a>
                </li>
                <li><a href="?page=feed">Feed</a>
                </li>
                <li><a href="?page=profile">Profile</a>
                </li>
                <?php 
                    if ($_POST['name'] == "Jerry") {
                        echo '<li><a href="?page=schedule">Schedule</a></li>';
                    } else {
                        echo '<li><a href="?page=search">Interview Search</a></li>';
                    }
                ?>
                <li><a href="?page=contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
