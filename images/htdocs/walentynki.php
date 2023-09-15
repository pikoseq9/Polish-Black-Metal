<html>
    <head>
        <title>Walentynkowy quiz</title>
    </head>
    <body>
        <h1 style="font-family:verdana;text-align:center;color:red;">Quiz walentynkowy</h1>
        <h2 style="font-family:verdana;">Witam w quizie walentynkowym, proszę wypełnić wymagane miejsca :) Autor to uczeń <a href="https://www.lo2kk.edu.pl/">tej szkoły</a>.</h2>
        <form method="post" action="">
            <label for="imie">Imie:</label><input type="text" name="imie" />
            <label for="nazwisko">Nazwisko:</label><input type="text" name="nazwisko" />
            <br /><label for="email">E-mail:</label><input type="text" name="email" />
            <label for="haslo">Hasło:</label><input type="password" name="haslo" />
            <br /><input type="submit" value="OK" />
        </form>
        <p style="font-family:Arial">
            <ol>
                <li>Pytanie <strong>Ile wynosi (-2)<sup>3</sup> ?</strong></li>
                <input type="radio" name="pytanie1">4<br>
                <input type="radio" name="pytanie1">-4<br>
                <input type="radio" name="pytanie1">-8<br>
                <input type="radio" name="pytanie1">8<br>
                <li>Pytanie <strong>Czemu kurtki w klasie powinny być zabronione?</strong></li>
                <input type="radio" name="pytanie2"> zabierają cenne miejsce<br>
                <input type="radio" name="pytanie2"> ktoś się może potknąć<br>
                <input type="radio" name="pytanie2"> robią zaduch<br>
                <input type="radio" name="pytanie2"> nie powinny być zabronione<br>
                <li>Pytanie <strong>Ile spędzasz czasu przed komputerem?</strong></li>
                <input type="radio" name="pytanie3"> nie mam komputera<br>
                <input type="radio" name="pytanie3"> do 1 godziny<br>
                <input type="radio" name="pytanie3"> 1-4 godzin<br>
                <input type="radio" name="pytanie3"> więcej niż 4 godziny<br>
                <br><input type="submit" name="wyslij" value="Wyślij quiz">
            </ol>
        </p>
    </body>
</html>
