 echo "<h2>Hotel Booking Details</h2>";

   
    echo "Guest name:". $_POST["name"]."<br>";
    echo "Email:. $_POST["email"]."<br>";
    echo "Phone:". $_POST["phone"]."<br>";
    echo "Check-in:". $_POST["checkin"]."<br>";
    echo "Check-out:".$_POST["checkout"]."<br>";
    echo "Room Type:".$_POST["room"]."<br>";
    echo "Number of Guests:".$_POST["guests"]."<br>";
    echo "Payment Method:".$_POST["payment"]."<br>";
    echo "Special Request:".$_POST["request"]."<br>";
    echo"<b> Room Booked successfully!<b>"
?>
