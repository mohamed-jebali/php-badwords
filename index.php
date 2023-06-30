<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
<body>
    <form class='p-5' action="./server.php" method='GET'>
        <input class='mb-4' type="text"name='paragrafo'> <br>
        <input class='mb-4' type="text"name='censurato'> <br>
        <button class='btn btn-primary'>
            Invia
        </button>
    </form>
</body>
</html>


<!-- @qui
Ciao ragazze e ciao ragazzi,
Esercizio di oggi: :php: PHP Badwords :php:
nome repo: php-badwords
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi tutte le occorrenze della parola da censurare -->