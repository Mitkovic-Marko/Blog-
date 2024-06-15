Kao lokalni server za izradu ovog projekta koriscen je lokalni servere XAMPP.
Baza podataka je bila smestena na phpmyadmin-u, a kao razvojno okruzenje je koriscen Visual Studio Code.

Baza podataka se sastoji iz 3 tabele posts, users, user_posts. 
Users tabela sadrzi entitente: id, email, password, user_type (email korisnika, sifra korisnika i tip korisnika).
Posts tabela sadrzi entitete: id, title, content, image_path, created_at (naslov bloga, sadrzaj bloga, putanja slike, vreme postavljanja).
User_posts vezna tabela koja cuva id obe tabele.

Blog ima korisnike od tri role (admin, registrovan korisnik, neregistrovan korisnik).

Neregistrovan korisnik:
-Ima mogucnost pregledanja postojecih blogova
-Ima mogucnost registracije
-Ima mogucnost vrsenja registracije gde unosi podatke o email-u, lozinki koju mora da potvrdi i ukoliko se poklapa uspesno je registrovan
gde postaje registrovan korisnik

Registrovan korisnik:
-Ima mogucnost kreiranja blogova gde unosi naslov i sadrzaj bloga i opciono dodaje sliku
-Ima mogucnost pregleda svojih blogova

Admin:
-Pored svih mogucnosti, admin ima mogucnost brisanja blogova

Trenutno u bazi podataka ima 2 korisnika i 1 admin.

email: korisnik1@gmail.com password: korisnik1
email: korisnik2@gmail.com password: korisnik2
email: admin@gmail.com password: admin123


