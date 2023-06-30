<!DOCTYPE html>
<html>
    <head>
        <title>Php Badwords</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    </head>
<body>
    <div class="container text-center p-5">
        <div class="row">
        <div class="col-12">
        <form class='' action="./server.php" method='POST'>
        <input class='mb-4 p-2' type="text"name='name' placeholder='Inserisci il nome'> <br>
        <input class='mb-4 p-2' type="text"name='censored' placeholder='Inserisci la password'> <br>
        <button class='btn btn-primary'>
            Invia
        </button>
    </form>
            </div>
        </div>
    </div>
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