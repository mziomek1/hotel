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
        <div class="container">
            <a href="hotel.php" class="logo-container">
                <img class="logo" src="img/logo.jfif" alt="Hotel Zizomkia">
                <h1>Hotel Zizomki</h1>
            </a>
            <nav>
                <ul>
                    <li><a href="hotel.php">Strona Główna</a></li>
                    <li><a href="pokoje.php">Kontakt i Rezerwacje</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section id="reservation">
            <div class="container">
                <h2>Zarezerwuj pokój</h2>
                <p>Wypełnij poniższy formularz, aby zarezerwować pokój w naszym hotelu.</p>
                <form method="post" action="">
                    <label>Imię:</label>
                    <input type="text" name="imie" required>
                    
                    <label>Nazwisko:</label>
                    <input type="text" name="nazwisko" required>
                    
                    <label>Numer telefonu:</label>
                    <input type="tel" name="telefon" required>
                    
                    <label>Liczba osób:</label>
                    <select name="ile">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    
                    <label>Od:</label>
                    <input type="date" name="od" required>
                    
                    <label>Do:</label>
                    <input type="date" name="do" required>
                    
                    <button type="submit">Zarezerwuj</button>
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
