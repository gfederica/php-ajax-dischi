<!-- Descrizione:
Create un array di 10 dischi (con, per ciascun disco, informazioni su titolo, autore, anno, genere e percorso della copertina) in un file database.php.
Importate questo file in un file index.php nel quale stampare, lato server, una card per ogni disco. -->

<?php

$albums = [
    [
        "titolo" => "DIE",
        "autore" => "iosonouncane",
        "anno" => "2015",
        "genere" => "Indie",
        "copertina" => "https://rockitecn.nohup.it/thumb500x500/copertine/28947.jpg"
    ],
    [
        "titolo" => "Lungs",
        "autore" => "Florence + The Machine",
        "anno" => "2009",
        "genere" => "Indie Rock / Pop",
        "copertina" => "https://m.media-amazon.com/images/I/71vQFkHMiSL._SS500_.jpg"
    ],
    [
        "titolo" => "RAMMSTEIN",
        "autore" => "Rammstein",
        "anno" => "2019",
        "genere" => "Metal",
        "copertina" => "https://m.media-amazon.com/images/I/31zILSqXWdL._SL500_.jpg"
    ],
    [
        "titolo" => "A Casa Tutto Bene",
        "autore" => "Brunori Sas",
        "anno" => "2017",
        "genere" => "Indie pop",
        "copertina" => "https://a6p8a2b3.stackpathcdn.com/VCSGJKfqAikmCqWAXiUVHbWOk2Y=/500x500/smart/rockol-img/img/foto/upload/a-casa-tutto-bene-brunori-sas-cover-ts1484925360.jpeg"
    ],
    [
        "titolo" => "Hai Paura Del Buio?",
        "autore" => "Afterhours",
        "anno" => "1997",
        "genere" => "Alternative Rock",
        "copertina" => "https://m.media-amazon.com/images/I/81nmSxgyQ7L._SS500_.jpg"
    ],
    [
        "titolo" => "Visions",
        "autore" => "Grimes",
        "anno" => "2012",
        "genere" => "Elettronica",
        "copertina" => "https://lh3.googleusercontent.com/proxy/l6O94CJsiN-IlPwCK-43unXYIMgbeAAlRn7WXVwndxNNRdBIXP4swR8bmIOhIYf55hbwO0BZHWJJwUI7YzX_R3kDV9WeCoeqZ5XpHND_CyWmXpbJaI36SyK5"
    ],
    [
        "titolo" => "Fever Ray",
        "autore" => "Fever Ray",
        "anno" => "2009",
        "genere" => "Elettronica",
        "copertina" => "https://images-na.ssl-images-amazon.com/images/I/61AGlT5Y1TL._AC_.jpg"
    ],
    [
        "titolo" => "Love Metal",
        "autore" => "HIM",
        "anno" => "2003",
        "genere" => "Alternative Rock",
        "copertina" => "https://m.media-amazon.com/images/I/71Fip9iHHAL._SS500_.jpg"
    ],
    [
        "titolo" => "Once",
        "autore" => "Nightwish",
        "anno" => "2004",
        "genere" => "Gothic Metal",
        "copertina" => "https://m.media-amazon.com/images/I/71L3+mObCzL._SS500_.jpg"
    ],
    [
        "titolo" => "Houses of the Holy",
        "autore" => "Led Zeppelin",
        "anno" => "1973",
        "genere" => "Hard Rock",
        "copertina" => "https://m.media-amazon.com/images/I/91OVb15MKRL._SS500_.jpg"
    ],
];
 ?>