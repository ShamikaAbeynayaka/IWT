<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../OLS/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Land Sales</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <section id="hero">
            <h1>Welcome to Online Land Sales</h1>
            <p>Find your perfect piece of land today!</p>
            <a href="properties.php" class="btn">View Properties</a>
        </section>

        <section id="featured-properties">
            <h2>Featured Properties</h2>
            <?php
                // Code to fetch and display featured properties from a database
                // Example:
                
                $featuredProperties = fetchFeaturedProperties();
                foreach ($featuredProperties as $property) {
                    echo '<div class="property-card">';
                    echo '<img src="' . $property['image'] . '" alt="' . $property['title'] . '">';
                    echo '<h3>' . $property['title'] . '</h3>';
                    echo '<p>Location: ' . $property['location'] . '</p>';
                    echo '<p>Price: $' . $property['price'] . '</p>';
                    echo '<a href="property-details.php?id=' . $property['id'] . '" class="btn">Details</a>';
                    echo '</div>';
                }
                
            ?>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
