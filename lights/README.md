

Requirements :
  - python 2.7
  - pyserial
  - python2-flask

Usage :

You need to be root to access USB serial tty.

 > sudo python2.7 main.py

The api will be serving on the port.

API :

 /light/<num intersection>/<direction>

  - intersection est un entier identifiant l'intersection
  - direction parmi droite, gauche, haut