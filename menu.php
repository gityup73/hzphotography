
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span> 
	    </button>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
          <li<?php if ($page=="index") echo " class=\"active\""; ?>>
            <a href="index">HOME</a></li>

          <li<?php if ($page=="family") echo " class=\"active\""; ?>>
	        <a href="family">FAMILY</a></li>

	      <li<?php if ($page=="children") echo " class=\"active\""; ?>>
	        <a href="children">CHILDREN</a></li>

	      <li<?php if ($page=="pets") echo " class=\"active\""; ?>>
	        <a href="pets">PETS</a></li> 

	      <li<?php if ($page=="sports") echo " class=\"active\""; ?>>
	        <a href="sports">SPORTS</a></li>

	      <li class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#">INFO</a>
	        <ul class="dropdown-menu">
              <li><a href="bio">BIO</a></li>
              <li><a href="contact">CONTACT</a></li>
	        </ul>
	      </li>
    	</ul>
    </div>
  </div>
</nav>




