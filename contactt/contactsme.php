<?php
    $servername="localhost";
    $user="root";
    $pass="";
    $dbname="db_personalwebely";

    $conn= new mysqli($servername, $user, $pass, $dbname);

    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }


?>
<?php
    if (isset($_GET['nama'])) {
        $nama = $_GET['nama'];
        $email = $_GET['email'];
        $telp = $_GET['telp'];
        $pesan= mysqli_real_escape_string($conn, $_GET['pesan']);

        $sql = "INSERT INTO form_data (nama, email, telp, pesan) 
                VALUES ('$nama', '$email', '$telp', '$pesan')";
        
        if ($conn->query($sql) === TRUE) {
            echo "";

        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>

<?php
$contact = array(
    array(
        "icon" => "bx bx-envelope",
        "title" => "My Email",
        "info" => "elyoradior01@student.ciputra.ac.id"
    ),
    array(
        "icon" => "bx bx-phone",
        "title" => "My Number",
        "info" => "+62 81216890061"
    ),
    array(
        "icon" => "bx bx-current-location",
        "title" => "My Location",
        "info" => "Surabaya"
    )
);

$json_contact = json_encode($contact);
?>


<!DOCTYPE html>
<html>
    <head>

        <title>Elyora Dior</title>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
              const header = document.querySelector("header");
              window.addEventListener("scroll", function() {
                header.classList.toggle("sticky", window.scrollY > 0);
              });
            });

            function toggleMenu() {
            var nav = document.getElementById("mynav");
            if (nav.className === "navigation") {
                nav.className += " responsive";
            } else {
                nav.className = "navigation";
            }
        }

        </script>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,900&display=swap" rel="stylesheet">



    </head>
    <body>
        <header>
            <a ref="#" class="logo"><img src="../img/logome.png"></a>
            <div class="bx bx-menu" id="menu-icon" onclick="toggleMenu()"></div>

            <ul class="navigation" id="mynav">
                <li><a href="../Personal Website Elyora.html">Home</a></li>
                <li><a href="../Personal Website Elyora.html">About</a></li>
                <li><a href="../experiences/exp.html">Experiences</a></li>
                <li><a href="../portofolio_menu/portofolio_utama.html">Portofolio</a></li>
                <li><a href="../contactt/contactsme.php">Contact</a></li>
            </ul>
            <!----- <a href="#" class="top-btn">Download CV</a> -->
        </header>

        <section class="contact" id="contact">
            <h1 class="heading">Get In Touch!</h1>

            <div class="icons-container">
                <div class="icons">
                    <i class="<?php echo $contact[0]['icon']; ?>"></i>
                    <h4><?php echo $contact[0]['title']; ?></h4>
                    <p><?php echo $contact[0]['info']; ?></p>
                </div>
                <div class="icons">
                    <i class="<?php echo $contact[1]['icon']; ?>"></i>
                    <h4><?php echo $contact[1]['title']; ?></h4>
                    <p><?php echo $contact[1]['info']; ?></p>
                </div>
                <div class="icons">
                    <i class="<?php echo $contact[2]['icon']; ?>"></i>
                    <h4><?php echo $contact[2]['title']; ?></h4>
                    <p><?php echo $contact[2]['info']; ?></p>
                </div>
            </div>

            <div class="row">
                <form action="contactsme.php" method="get">
                    <input type="text" placeholder="Name" class="box" name=nama>
                    <input type="email" placeholder="Email" class="box" name=email>
                    <input type="number" placeholder="Number" class="box" name=telp>

                    <textarea name=pesan id="Message" placeholder="Message" cols="30" rows="10"></textarea>
                    <input type="submit" name="btn" class="btn" value="Send Message"></input>
                </form>

                <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.25766576029!2d112.6302805186902!3d-7.275441714864695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Surabaya%20City%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1680954950309!5m2!1sen!2sid" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </section>

        <footer> created by Elyora Dior | © All Rights Reserved!</footer>

    </body>
</html>