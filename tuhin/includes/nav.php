<div  class="rgba-stylish-strong" style=" text-align:center ; height :100px; padding-top:20px; padding-bottom:20px; color:aliceblue; font-size:300%; ">

    Model Pharmacy
</div>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark special-color-dark">

  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create.php">Add New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>



        </ul>
        <!-- Links -->

        <form action="index.php" method="post" class="form-inline">
            <div class="md-form my-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Medicine Name" name="MedicineName" aria-label="Search">
                <input  class="btn btn-dark border border-light" type="submit" name ="search" value="search" > 
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->