## Oleksandr Tomenchuk lab7 docker-compose
>Projekt składa się z trzech plików Dockerfile, jednego Docker-compose i<br> 
>dodatkowych plików niezbędnych do poprawnej pracy każdej usługi cząstkowej.<br> 
>Port używany w projekcie to **8090** ponieważ port 6666 jest portem **zastrzeżonym przez system.**<br>
### PHP
Osobny pool podłączony do portu 9009 dla aplikacji webowej. Kontekst strony umieszczony został w <br>
katalogu /srv/strona. Aplikacja korzysta z aliasu dla kontenera z bazą danych.<br>
Kontener podłączony do sieci backend.<br>
### MySQL
Hasło do dla uzytkownika root jest ustawione w pliku Docker-compose.MySQL jest podłaczony do sieci backend.<br>
Dodatkowo żeby po restarcie kontenera nie utracic danych trzymanych w bazie volumen dubluje dane z <br>
systemu macierzystego w bazie MySQL wewnątrz kontenera baza_danych.<br>
### HTTPD
Ponieważ standardowy config httpd nie pozwala na użycie proxymatcha oraz vhostów <br>
plik ten został zmieniony. Dyrektywa ProxyPassMatch zapełnia prawidłowe proxowanie.<br>
W pliku httpd.conf dodano załadowanie bibliotek i metod potrzebnych dla poprawnego działania proxy. <br>
Kontener jest podłączony do do sieci frontend i backend, z proxy PHP łączy się za pomocą aliasu.<br>
Dodatkowe pliki konfiguracyjne: httpd.conf oraz httpd-vhosts.conf <br>
## Jak uruchomić ?
Należy pobrać cały katalog z projektem.<br> 
Pierwsze uruchomienie wygłada następująco:
```
docker-compose build --no-cache
docker-compose up
```
Przed kolejnym uruchomieniem przydatnym będzie wyczyszczenie niepotrzebnych rzeczy.<br>
Do tego celu można użyć:
```
docker-compose down --remove-orphans --volumes --rmi all
```
I ponowne uruchomienie:
```
docker-compose build --no-cache
docker-compose up
```
