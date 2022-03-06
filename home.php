<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./script.js" defer></script>
    <title>Club</title>

</head>

<body id="home" class="d-flex">
    <h1 class="mt-3">CLUB FOTBALL SOCCER</h1>
    <div class="container d-flex mt-5">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Club Name</th>
                    <th scope="col">Ground</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once './includes/download-teams.php'; ?>
            </tbody>
        </table>
        <div>
            <button type="button" class="btn btn-primary addNewButton mt-2 mb-3">Add a New Team</button>
        </div>
    </div>

    <!-- POP UP FOR EDIT -->
    <?php include './edit.php' ?>

    <!-- POP UP FOR DELETE -->
    <?php include './delete.php' ?>

    <!-- POP UP FOR ADD -->
    <?php include './addNewClub.php' ?>


</body>

</html>