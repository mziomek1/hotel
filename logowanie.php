
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Zizomki - Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Hotel Zizomki</h1>
    <a href="hotel.php">
        <img class="logo" src="img/logo.jfif">
    </a>
    <nav>
        <ul>
            <li><a href="hotel.php" class="przyciski">Strona Główna</a></li>
            <li><a href="pokoje.php" class="przyciski">Kontakt oraz Rezerwacje</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="login">
        <div class="container">
            <h2>Zaloguj się</h2>
            <form method="post" action="">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie" required>
                
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko" required>
                
                <label for="telefon">Numer telefonu:</label>
                <input type="tel" id="telefon" name="telefon" pattern="[0-9]{9}" placeholder="123456789" required>
                
                <button type="submit" name="login">Zaloguj się</button>
            </form>
            <h3>Nie masz konta?</h3>
            <form method="post" action="">
                <label for="imie">Imię:</label>
                <input type="text" id="imie" name="imie" required>
                
                <label for="nazwisko">Nazwisko:</label>
                <input type="text" id="nazwisko" name="nazwisko" required>
                
                <label for="telefon">Numer telefonu:</label>
                <input type="tel" id="telefon" name="telefon" pattern="[0-9]{9}" placeholder="123456789" required>
                
                <button type="submit" name="register">Stwórz konto</button>
            </form>
        </div>
    </section>
</main>
<?php
$conn = mysqli_connect("localhost", "root", "", "hotel");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $telefon = $_POST['telefon'];

        $query = "INSERT INTO klienci (Imię, Nazwisko, Numer_telefonu) VALUES ('$imie', '$nazwisko', '$telefon')";
        if (mysqli_query($conn, $query)) {
            $_SESSION['user'] = $imie;
            header("Location: pokoje.php");
            exit();
        } else {
            echo "Błąd rejestracji: " . mysqli_error($conn);
        }
    }
    if (isset($_POST['login'])) {
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $telefon = $_POST['telefon'];

        $query = "SELECT * FROM klienci WHERE Imię='$imie' AND Nazwisko='$nazwisko' AND Numer_telefonu='$telefon'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = $imie;
            header("Location: pokoje.php");
            exit();
        } else {
            echo "Niepoprawne dane logowania!";
        }
    }
}
mysqli_close($conn);
?>

<footer>
    <div class="container">
        <p>&copy; 2025 Hotel Zizomki. Wszelkie prawa zastrzeżone.</p>
    </div>
</footer>
</body>
</html>