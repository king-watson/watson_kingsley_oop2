<?php
spl_autoload_register(function ($class) {
    $class = str_replace('OOP2\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';   // Build the file path
    $filepath = str_replace("/", DIRECTORY_SEPARATOR, $filepath);
    if (file_exists($filepath)) {
        require_once $filepath;
    }
});

// Level 1 (root) i want to comment these out because they make no sense on the local host
$clothing = new OOP2\clothing("Clothing", "every coloured", "all sizes");

// Level 2 (child) i want to comment these out because they make no sense on the local host
$tops = new OOP2\tops("Tops", "every coloured", "all sizes");
$bottoms = new OOP2\bottoms("Bottoms", "every coloured", "all sizes");
$footwear = new OOP2\footwear("Footwear", "every coloured", "all sizes");

// Level 3 (grandchild) 
$tshirt = new OOP2\tshirt();
$jacket = new OOP2\jacket();
$jeans = new OOP2\jeans();
$sneakers = new OOP2\sneakers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2 Assignment - Clothing</title>
</head>
<body>
    <header>
        <h1>The Clothing Pyramid</h1>
    </header>
    <main>
         <!-- Clothing PHP -->
        <div id="clothing-con">
            <h2>Clothing</h2>
            <p>
                <?php echo $clothing->wear(); ?>
            </p>
            <p>
                <?php echo $clothing->fold(); ?>
            </p>
            <p>
                <?php echo $clothing->describe(); ?>
            </p>
        </div>
        <!-- Tops PHP -->
        <div id="tops-con">
            <h2>Tops</h2>
            <p>
                <?php echo $tops->wear(); ?>
            </p>
            <p>
                <?php echo $tops->fold(); ?>
            </p>
            <p>
                <?php echo $tops->describe(); ?>
            </p>
        <!-- T-Shirt PHP -->
            <div id="tshirt-con">
                <h3>T-Shirt</h3>
                <p>
                    <?php echo $tshirt->wear(); ?>
                </p>
                <p>
                    <?php echo $tshirt->fold(); ?>
                </p>
                <p>
                    <?php echo $tshirt->describe(); ?>
                </p>
            </div>
        <!-- Jacket PHP -->
            <div id="jacket-con">
                <h3>Jacket</h3>
                <p>
                    <?php echo $jacket->wear(); ?>
                </p>
                <p>
                    <?php echo $jacket->fold(); ?>
                </p>
                <p>
                    <?php echo $jacket->describe(); ?>
                </p>
                <p>
                    <?php echo $jacket->pockets(); ?>
                </p>
            </div>
        </div>
        <!-- Bottoms PHP -->
        <div id="bottoms-con">
            <h2>Bottoms</h2>
            <p>
                <?php echo $bottoms->wear(); ?>
            </p>
            <p>
                <?php echo $bottoms->fold(); ?>
            </p>
            <p>
                <?php echo $bottoms->describe(); ?>
            </p>
        <!-- Jeans PHP -->
            <div id="jeans-con">
                <h3>Jeans</h3>
                <p>
                    <?php echo $jeans->wear(); ?>
                </p>
                <p>
                    <?php echo $jeans->fold(); ?>
                </p>
                <p>
                    <?php echo $jeans->describe(); ?>
                </p>
                <p>
                    <?php echo $jeans->pockets(); ?>
                </p>
            </div>
        </div>
        <!-- Footwear PHP -->
        <div id="footwear-con">
            <h2>Footwear</h2>
            <p>
                <?php echo $footwear->wear(); ?>
            </p>
            <p>
                <?php echo $footwear->fold(); ?>
            </p>
            <p>
                <?php echo $footwear->describe(); ?>
            </p>
        <!-- Sneakers PHP -->
            <div id="sneakers-con">
                <h3>Sneakers</h3>
                <p>
                    <?php echo $sneakers->wear(); ?>
                </p>
                <p>
                    <?php echo $sneakers->fold(); ?>
                </p>
                <p>
                    <?php echo $sneakers->describe(); ?>
                </p>
            </div>
        </div>

    </main>
</body>
</html>