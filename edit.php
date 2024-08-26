<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center min-h-screen bg-gray-100">

    <!-- Form Container -->
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Edit Products</h2>
         <?php
        require_once "connection.php";
        $id = $_GET["id"];
        $sql = "SELECT * FROM products WHERE id=$id";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
        ?> 
            <!-- Form -->
            <form action="update.php" method="Get">
                <!-- Name Input -->
                 <input type="hidden" name="Id" value="<?php echo $row["id"]; ?>">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                    <input type="text" id="name" name="name" required value="<?php echo $row["Product_name"]; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                </div>

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <input type="text" id="email" name="email" required value="<?php echo $row["email"]; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                </div>

                <!-- Age Input -->
                <div class="mb-4">
                    <label for="age" class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                    <input type="number" min="0" id="age" name="age" required value="<?php echo (float)$row["Price"]; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                </div>

                <!-- City Input -->
                <div class="mb-4">
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Quanity</label>
                    <input type="number" id="city" name="city" required value="<?php echo $row["Quanity"]; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Added_Date</label>
                    <input type="date" id="city" name="city" required value="<?php echo $row["Added_Date"]; ?>"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 focus:outline-none">
                </div>
                <!-- Submit Button -->
                <button type="submit"
                    class="w-full py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update Student
                </button>
            </form>
        <?php
        }else{
            echo "<h1>No User Found</h1>";
            echo "<a href='index.php' class=\"w-full block text-center my-8 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500\"> Go Back </a>";
        }
        ?>
    </div>
</body>

</html>