<!DOCTYPE html>
<html>
    <head>
        <title>College Data Search</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="college.css">
    </head>
        <body>
            <h1>Your #1 Source for College Data!</h1>
 <div class = home><h2>Click on one of the links below to get the answer to some commonly asked questions about colleges</h2>
                <form action="main.php" method="POST">
                        <input class= "myButton" type="submit" value="Which colleges have the highest enrollment?">
                        <input name="query" type="hidden" value="SELECT enrollment.ID, Name, Enrollment FROM enrollment
INNER JOIN institutions ON enrollment.ID = institutions.ID ORDER BY Enrollment DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total liabilities?">
                        <input name="query" type="hidden" value="SELECT * FROM financial11 LIMIT 10">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of net assets?">
                        <input name="query" type="hidden" value="SELECT * FROM enrollment11 LIMIT 10">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total revenues?">
                        <input name="query" type="hidden" value="SELECT * FROM institutions INNER JOIN enrollment11 ON institutions.ID = enrollment11.ID LIMIT 10">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total revenues per student?">
                        <input name="query" type="hidden" value="SELECT * FROM institutions INNER JOIN financial11 ON institutions.ID = financial11.ID LIMIT 10">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of net assets per student?">
                        <input name="query" type="hidden" value="SELECT * FROM institutions INNER JOIN financial11 ON institutions.ID = financial11.ID LIMIT 10">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total liabilities per student?">
                        <input name="query" type="hidden" value="SELECT * FROM institutions INNER JOIN financial11 ON institutions.ID = financial11.ID LIMIT 10">
                </form></div>
        </body>
</html>