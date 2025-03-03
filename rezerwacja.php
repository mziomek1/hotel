<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Zizomki - Rezerwacja</title>
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
        <section id="reservation">
            <div class="container" id="formularz">
                <h2>Sprawdź czy jest wolny dany pokój którego szukasz!</h2>
                <p>Wypełnij formularz</p>
                <form method="post" action="rezerwacja.php">
                    <label for="ile">Liczba osób:</label>
                    <select id="ile" name="ile">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select><br>
                    <label for="typ">Typ mieszkania</label>
                    <select id="typ" name="typ">
                        <option value="Apartament">Apartament</option>
                        <option value="Domek">Domek</option>
                        <option value="Mieszkanie">Mieszkanie</option>
                    </select><br>
                    
                    <label for="od">Od:</label><br>
                    <input type="date" id="od" name="od" required>
                    <br>
                    <label for="do">Do:</label><br>
                    <input type="date" id="do" name="do" required>
                    <br>
                    <button type="submit" class="btn">Sprawdź</button>
                </form>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; 2025 Hotel Zizomki. Wszelkie prawa zastrzeżone.</p>
            <div class="social-icons">
                <a href="#"><img src="img/Facebook.png" alt="Facebook"></a>
                <a href="#"><img src="img/X.png" alt="Twitter"></a>
                <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>
