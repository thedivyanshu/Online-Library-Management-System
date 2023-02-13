<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<i class="icon-reorder shaded"></i>
			

			</a>
			  <a class="brand" href="{{ URL::route('home') }}"> <img src="images/logo.png" width="70" height="50"> </a> <b  class="brand" style="color:#800080"> 
			  	<p>WELCOME TO TECHNO ONLINE LIBRARY MANAGEMENT SYSTEM </p>
            </b>
			<!--<div class="module-body">
				    

                    <a href="{{ URL::route('student-registration') }}"><strong>Student Registration Form</strong></a>
                    <a href="{{ URL::route('search-book') }}"><strong>Search Book</strong></a>
                
                  </div>-->

				
                


			 
		</div>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding-left:75px;
  overflow: hidden;
}

li {
  float: right;
}

li a {
  display: block;
  padding-left: 75px;
  background-color: #fff;
}
p {
	margin-top: 25px;
}
.navbar-inner{
	margin-top:30px;
}

</style>


<ul>
  <li><a href="{{ URL::route('student-registration') }}"><strong><h4>Student Registration Form<h4></h4></strong></a></li>
  <li><a href="{{ URL::route('search-book') }}"><strong>
 <h4> Search Book</h4></strong></a></li>

</ul>
	
