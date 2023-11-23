<?php
require 'connection.php';

// Assuming you have the ID of the announcement you want to update
$announcementIdToUpdate = $_GET['id']; // Replace with the actual ID

// Fetch the existing data for the announcement to populate the form
$sql = "SELECT * FROM contact WHERE id = $announcementIdToUpdate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Existing data
    $existingFirstName = $row['firstname'];
    $existingLastName = $row['lastname'];
    $existingEmail = $row['email'];
    $existingCategory = $row['catégorie'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Announcement</title>

    <!-- Add any additional styling if needed -->

</head>
<body>

<div class="container mt-5">
    <h2>Update Announcement</h2>

    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $announcementIdToUpdate; ?>">

        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname</label>
            <input type="text" class="form-control" name="new_firstname" value="<?php echo $existingFirstName; ?>" required>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname</label>
            <input type="text" class="form-control" name="new_lastname" value="<?php echo $existingLastName; ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" name="new_email" type="email" value="<?php echo $existingEmail; ?>" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="new_category" required>
                <option value="announcement" <?php echo ($existingCategory == 'announcement') ? 'selected' : ''; ?>>Electronique</option>
                <option value="event" <?php echo ($existingCategory == 'event') ? 'selected' : ''; ?>>Logement</option>
                <option value="sale" <?php echo ($existingCategory == 'sale') ? 'selected' : ''; ?>>Voiture</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>

</body>
</html>
