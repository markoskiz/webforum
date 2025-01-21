# PHP forum aplikacija 

Ova e ednostavna PHP Forum Aplikacija sozdadena so osnoven PHP. Koristi ednostaven model-vid-kontroler (MVC) sablon. Ovaa PHP forum aplikacija koristi objektno-orientirano programiranje za da sozdade forum. Koristi PHP Data Object (PDO) za povrzuvanje so bazata na podatoci. Poddrzuva:

- Kreiranje na forum tema
- Odgovor na poraka vo forumot
- Registracija na korisnik

Kontrolerite se datoteki vo korenskata papka na aplikacijata. Tie se:

- index.php: Glavniot kontroler
- create.php: Kontroler za kreiranje nova forum tema
- register.php: Kontroler za registracija na korisnik
- topic.php: Kontroler za prikazuvanje na forum tema i upravuvanje so odgovorite na nea
- topics.php: Kontroler za prikazuvanje na poveḱe forum temi

Modelite se sodrzani vo papkata libraries. Klasi se definirani za sekoi model koi sodrzat podatoci i metodi:

- Database.php: Klasa za povrzuvanje so bazata na podatoci
- Template.php: Klasa za definiranje i upravuvanje so sablon ili vid
- Topic.php: Klasa za definiranje na forum tema
- User.php: Klasa za definiranje na korisnik
- Validator.php: Klasa za validacija na različni formi za vnesuvanje

Pogledite se vo papkata templates. Papkata templates sodrzi stilovi, bootstrap javascript-i i CKeditor datoteki.

Papkata core sodrzi inicializatorski kod, a papkata config sodrzi konfiguraciski promenlivi i konstanti. init.php ja čita config.php, se povrzuva so bazata na podatoci i vključuva drugi potrebni kodovi. Ovaa datoteka e vključena vo sekoi kontroler.

Papkata helpers sodrzi pomosni funkcii koi se potrebni nasekade vo kodot. Tie se intenzivno koristeni vo pogledite. Avatarite na korisnicite se skladirani vo images/avatars, a standardniot avatar e skladiran vo templates/img/.

Za da ja instalirate ovaa aplikacija, sozdadete baza na podatoci od datotekata talkingspace.sql, potoa kopirajte gi site drugi datoteki vo vasata htdocs papka i startuvajte.