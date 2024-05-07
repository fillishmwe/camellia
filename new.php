<!-- add_candidate.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Candidate</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add Candidate</h1>
    </header>
    <main>
        <section>
            <h2>Enter Candidate Information</h2>
            <form action="add_candidate_process.php" method="post">
                <input type="text" name="national_id" placeholder="National ID" required>
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <select name="post_id">
                    <option value="" disabled selected>Select Post</option>
                    <?php
                    // Fetch posts from the database to populate the dropdown
                    require_once "db_connect.php"; // Assuming you have a database connection file
                    $sql = "SELECT * FROM Post";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['PostId'] . '">' . $row['PostName'] . '</option>';
                        }
                    }
                    ?>
                </select>
                <input type="date" name="exam_date" required>
                <input type="text" name="phone_number" placeholder="Phone Number" required>
                <input type="number" name="marks" placeholder="Marks" required>
                <button type="submit">Add Candidate</button>
            </form>
        </section>
    </main>
</body>
</html>
