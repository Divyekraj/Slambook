<?php 

include 'header.php'; ?>

<?php
$sql="select * from users";// where mail='$id';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['fname'];
$lname = $row['lname'];
$mail = $row['mail'];
?>

<style>
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width:100%;
}
.tabs button
{
	background-color:#00004d;
      border: 1px solid white;
      width: 48%;
      color: white;
      text-align: center;
      height: 40px;
      line-height: 40px;
      text-decoration: none;
}
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}
.tab button:hover {
  background-color: #ddd;
}

.tab button.active {
  background-color: #ccc;
}
</style>

<div class="tabs">
  <button class="tablinks" onclick="openEvent(event, 'show')">Events</button>
  <button class="tablinks" onclick="openEvent(event, 'book')">Book Event</button>
</div>
<script>
function openEvent(evt, evtName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("eventbook");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(evtName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>



<!--Show Events-->
<style>
.evtshow
{
	padding:20px;
	float:left;
	margin-left:80px;
	margin-top:50px;
	//height:200px;
	width:25%;
	border-radius:20px;
	box-shadow:5px 5px 5px 5px #999999;	
	background-image: linear-gradient(to right, #7FB8F2 , #C6C6C6);
}
</style>
<div id='show' class='eventbook' style='display:none;float:top;'>
	<?php
	$sql1="select * from eventbook";
	$result1 = mysqli_query($conn, $sql1);
			echo "
						<div align=center>
								<h3>Events is to be held</h3>
						</div>";
			while ($row = mysqli_fetch_array($result1)) 
				{
					if(date("Y-m-d")<$row['date'])
					{
					echo "					
								<div class='evtshow'>
									<h3>".$row['meetupreason']."</h3><br>
									<span><b>College : </b>".$row['college']."</span><br>
									<span><b>Location : </b>".$row['location']."</span><br>
									<span><b>Date : </b>".$row['date']."</span><br>
									<span><b>Description : </b><br>".$row['eventdetail']."</span><br>
									<center><button class='btn btn-success' style='border-radius:10px;' id='intrest' onclick='intrested()'>Intrested</button></center>
								</div> 	";
					}
				}
		echo "<br clear='all'><br><br><hr><br>
			<div align='center'>
				<h3>Events Successfully Completed</h3>
			</div>";
			$sql2="select * from eventbook";
			$result2 = mysqli_query($conn, $sql2);
			while ($row = mysqli_fetch_array($result2))
				{
					if(date("Y-m-d")>$row['date'])
					{
					echo "					
								<div class='evtshow'>
									<h3>".$row['meetupreason']."</h3><br>
									<span><b>College : </b>".$row['college']."</span><br>
									<span><b>Location : </b>".$row['location']."</span><br>
									<span><b>Date : </b>".$row['date']."</span><br>
									<span><b>Description : </b><br>".$row['eventdetail']."</span><br>
								</div>";
					}
				}
	?>
</div>
<script>
function intrested()
{
	alert("Your intrest is sent to the owner of the Event");
	name = localStorage.getItem("name");
    if (name == null || name == "null")
	{
		alert("Hi, Stranger!");
		name = prompt("What is your name?");
		localStorage.setItem("name", name);
    }
	else
	{
		alert ("Hi, " + name + "!");
		//localStorage.setItem("name",null);
	}
}
</script>
<!--//Show Events-->

<!-- Booking -->
	<div class="w3layoutsbooking eventbook" id="book" style="display:none;">
		<div class="event-container" style="margin-top:-80px;">
				<h3>Book Your Event</h3>
				<h6>Register for the event. This will be show to everyone for meeting together.</h6>
				<div class="booking-form-aits">
					<form action="eventbook.php" method="post">
						<input type="text" class="margin-right" value="<?php echo $fname ," ",$lname;?>" readonly>
						<input type="text" Name="Location" placeholder="Location" required="">
						<br><input type="text" class="margin-right" Name="Meet_up_reason" placeholder="MEET UP REASON" required="">
						<input type="text" Name="College" placeholder="COLLEGE" required="">
						<!--<p class="margin-right" style="float:left;color:#555;font-size:17px;"><label>Event For</label><select name="eventfor"><option>Everyone</option><option>Specific</option></select></p>-->
						<input type="date" id="edate" class="form-control" style="width:30%;" Name="Date" placeholder="DATE" required>
						<textarea name="Message" placeholder="EVENT DETAILS" required=""></textarea>
						<div class="send-button agileits w3layouts">
							<button class="btn btn-primary" onclick="datevalidate()">Book Event<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
						</div>
					</form>
				</div>

		</div>
	</div>
	<script>
	function datevalidate()
	{
		var entereddate=document.getElementById("edate").value;
		var d= new Date();
		var mm=d.getMonth();
		var dd=d.getDate();
		var yyyy=d.getFullYear();
		ed=entereddate.split("-");
		if(yyyy<=ed[0])
		{
			if(yyyy==ed[0])
			{
				if(mm<=ed[1])
				{
					if(mm==ed[1])
					{
						if(dd<ed[2]){}
						else{alert("please enter a valid date....!");}
					}
					else if(mm<ed[1]){}
					else{alert("Please enter a valid date....!");}
				}
				else{alert("Please enter a valid date....!");}
			}
			else if(yyyy<ed[0]){}
			else{alert("Please enter a valid date....!");}
		}
		else{alert("Please enter a valid date....!");}
	}
	</script>
<!-- //Booking -->


<?php
include 'footer.php';

?>