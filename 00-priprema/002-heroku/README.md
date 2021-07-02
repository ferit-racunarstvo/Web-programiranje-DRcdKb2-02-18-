# 001 - Heroku

Materijali za video: https://youtu.be/rlhpiCYG8xE

#### Heroku
- https://www.heroku.com/

#### Heroku instalacija
- https://devcenter.heroku.com/articles/heroku-cli

#### Heroku deploy s git-om
- https://devcenter.heroku.com/articles/git

1.  ```heroku login``` - Unutar repozitorija zadaće (ili bilo kojeg drugog repozitorija za vježbu -
ako terminal zamrzne kad se logirate, ostavite ga aktivnim i otvorite novi terminal u navedenom direktoriju)
2.  ```heroku git:remote -a naziv-vaseg-kreiranog-heroku-appa-iz-dashboarda```
4.  ```git push heroku master``` (ili main)

#### Upravljanje konfiguracijskim varijablama na Heroku (da konfiguracijski podatci ne postoje unutar javnog repozitorija:

- https://devcenter.heroku.com/articles/config-vars#managing-config-vars
- Kada se inicijaliziraju konfiguracijske varijable putem Heroku app-a ili CLI-a
  - Primjer dohvaćanja konfiguracijskih varijabli iz PHP-a: ``` $env_var = getenv('MY_VAR'); ```

#### Software-i za pristup i rad s eksternom bazom
- https://www.jetbrains.com/phpstorm/
- https://dbeaver.io/
- https://www.sequelpro.com/ (Mac OS)
- https://www.beekeeperstudio.io/get (Koristi se unutar Linux Lite Virtualbox slike)


### Info
- Ukoliko imate github student pack https://education.github.com/pack#offers možete poboljšati vaš heroku plan iz Free u Hobby https://www.heroku.com/pricing
