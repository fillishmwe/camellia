<?php
// Step 1: Retrieve data for the select box options from the related table
// Assuming you have a database connection established

// Query to retrieve data for the related table (e.g., categories)
$query = "SELECT id, name FROM categories";
$result = mysqli_query($connection, $query);

// Check if the query was successful
if ($result) {
    // Step 3: Output HTML code with the select box and options
    echo '<form method="post" action="process_form.php">';
    echo '<select name="category_id">';
    
    // Step 2: Use a foreach loop to iterate over the retrieved data and generate the options
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }
    
    echo '</select>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

// Step 4: Handle the form submission to insert the selected foreign key value into the database
// This typically involves processing the form data in a separate PHP file (e.g., process_form.php)
?>
