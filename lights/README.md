Lights
======

Control led projector via ReST API.

Software
--------

Requirements:

  - python 2.7
  - pyserial
  - python2-flask

Installation:

 > git clone https://github.com/museomix/2014-la-roue-libre.git

Usage:

You need to be root to access USB serial tty.

 > sudo python2.7 lights/main.py

The api will be serving on the port 5000.

API:

Here is the webapp entry point

 `server:5000/light/<num intersection>/<direction>`

  - intersection est un entier identifiant l'intersection
  - direction parmi droite, gauche, haut

Hardware
--------

Starting from the controling computer with the USB to DMX device link the
projectors in serial.

(Starting) DMX channels must be set accordingly on each projector

| direction | channel | |
| --- | --- | --- |
| Left   | 001 | |
| Right  | 017 | |
| Center | 033 | optional |
| Rear   | 049 | optional |

