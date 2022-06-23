<?php

if (strlen($_GET['name']) < 4 ) {
    echo "nome non valido";
} else if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    echo "mail non valida";
} else if (!is_numeric($_GET['age'])) {
    echo "età non valida";
} else {
    echo "Accesso con sucesso.";
}