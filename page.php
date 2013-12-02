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
                        <input type="submit" value="Which colleges have the highest enrollment?">
                        <input name="query" type="hidden" value="SELECT Name, Enrollment FROM enrollment11
INNER JOIN institutions ON enrollment11.ID = institutions.ID ORDER BY Enrollment DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total liabilities?">
                        <input name="query" type="hidden" value="SELECT Name, Liabilities FROM project.institutions
INNER JOIN financial11 ON institutions.ID = financial11.ID ORDER BY Liabilities DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of net assets?">
                        <input name="query" type="hidden" value="SELECT Name, Assets FROM project.institutions
INNER JOIN financial11 ON institutions.ID = financial11.ID ORDER BY Assets DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total revenues?">
                        <input name="query" type="hidden" value="SELECT Name, Revenue FROM project.institutions
INNER JOIN financial11 ON institutions.ID = financial11.ID ORDER BY Revenue DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total revenues per student?">
                        <input name="query" type="hidden" value="SELECT Name, Revenue, Enrollment, Revenue/Enrollment AS Revenue_per_student FROM financial11 INNER JOIN enrollment11 ON financial11.ID = enrollment11.ID
INNER JOIN institutions ON institutions.ID = financial11.ID ORDER BY Revenue/Enrollment DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of net assets per student?">
                        <input name="query" type="hidden" value="SELECT Name, Assets, Enrollment, Assets/Enrollment AS Assets_per_student FROM financial11 INNER JOIN enrollment11 ON financial11.ID = enrollment11.ID
INNER JOIN institutions ON institutions.ID = financial11.ID ORDER BY Assets/Enrollment DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest amount of total liabilities per student?">
                        <input name="query" type="hidden" value="SELECT Name, Liabilities, Enrollment, Liabilities/Enrollment AS Liabilities_per_student FROM financial11 INNER JOIN enrollment11 ON financial11.ID = enrollment11.ID
INNER JOIN institutions ON institutions.ID = financial11.ID ORDER BY Liabilities/Enrollment DESC LIMIT 10;">
                </form>
                <form action="main.php" method="POST">
                        <input type="submit" value="Which colleges have the largest percentage increase in liabilities between 2010 and 2011?">
                        <input name="query" type="hidden" value="SELECT Name,financial10.Liabilities AS Liabilities_2010, financial11.Liabilities AS Liabilities_2011 FROM financial11 INNER JOIN institutions ON institutions.ID = financial11.ID
INNER JOIN financial10 ON institutions.ID = financial10.ID ORDER BY financial11.Liabilities/financial10.Liabilities DESC LIMIT 10;">
                </form></div>
        </body>
</html>

 
