<!doctype html>
<html>
<body>
Hello, a new client as submitted the form on your
website! Here is the information they submitted:<br><br>
Client Name: <?php echo $_POST['firstName']; ?> <?php echo $_POST['lastName']; ?><br>
Client Phone Number: <?php echo $_POST['phoneNumber']; ?><br>
Client Email: <?php echo $_POST['email']; ?><br>
Number of Adults: <?php echo $_POST['numOfAdults']; ?><br>
Number of Children: <?php echo $_POST['numOfChildren']; ?><br>
Destination: <?php echo $_POST['destination']; ?><br>
Travel Dates: From <?php echo $_POST['departureDate']; ?> to <?php echo $_POST['returnDate']; ?><br>
Interested Activities: <?php echo $_POST['activities']; ?>
</body>
</html>