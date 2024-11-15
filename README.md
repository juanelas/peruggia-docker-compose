# Peruggia docker

A slightly modified version of the Peruggia application by Andrew Kramer/Sakartu that can be run with docker compose.

## Getting ready

Copy `template.env` to `.env` and fill the variables. Default values will just work at <http://localhost:20080>.

You may consider as well to modify a `./peruggia/users.txt` with pairs of `username:password`. The internal database will store the usernames along with the MD5 sum of their passwords.

## Run

```sh
docker compose up
```

Connect your browser to the container and execute `install.php` (by default at <http://localhost:20080/install.php>).

Once installed just enjoy.

## Vulnerabilities

Edit `./peruggia/conf.php`. Near the bottom under "Vulnerabilities" set up what you want Peruggia to be vulnerable to. By default is vulnerable to SQLi.

None of the vulnerabilities in Peruggia are indexed in an attempt to make your experience a little more realistic and prevent cheating.  ;)  However... Should you like to know what the attack vectors are, feel free to open up the source code and look for places where there is a check on one of the 'enable/disable' vulnerability options.  These are likely locations.

## Greetz

- Slappywag
- Doomchip
- Bolo
- Andrew
- Skartu
