<!DOCTYPE HTML>

<html>

<head>
    <title>Untitled</title>
</head>

<body>
 <?php /*
echo '<select name="birthyear">';
echo '<option value="">Select Year</option>';
for ($year = 2026; $year >= 1950; $year--) {
    echo "<option value=\"$year\">$year</option>";
}
echo '</select>'; */


/*$students = ["Abdi Habtamu", "Ahmed Taha", "Firomsa aliyi", "Bonsa ahmed", "Sara Dabali"];

echo '<select name="student">';
echo '<option value="">Select Student</option>';
foreach ($students as $student) {
    echo "<option value=\"$student\">$student</option>";
}
echo '</select>';  */


// today exercise
// creating simple form in php for automatic processing
// form creation

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    if(!empty($username)) {
        $message = "Welcome back, " . $username . "!";
    }}
?>
   <h2>Login Form</h2>
    <form method="post"
action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Name: <input type="text" name="username">
        <input type="submit" value="Login">
    </form>
    <p><?php echo $message; ?></p>

</body>

</html>