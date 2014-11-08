import CrossRoad

from flask import Flask
app = Flask(__name__)


url_to_int = {
    "droite": CrossRoad.DIR_RIGHT,
    "gauche": CrossRoad.DIR_LEFT,
    "haut": CrossRoad.DIR_UP,
}

@app.route('/light/<int:crossroad>/<direction>')
def deal_with_it(crossroad, direction):
    # show the user profile for that user
    CrossRoad.update_crossroad(crossroad, url_to_int[direction])
    return "<p>crossroad %d : direction %s</p>" % (crossroad, direction)

if __name__ == '__main__':
    app.run(host='0.0.0.0')


#import curses


#stdscr = curses.initscr()
#curses.cbreak()
#stdscr.keypad(1)
#
#stdscr.addstr(0,10,"Hit 'q' to quit")
#stdscr.refresh()
#
#key = ''
#while key != ord('q'):
#    key = stdscr.getch()
#    stdscr.addch(20,25,key)
#    stdscr.refresh()
#    if key == curses.KEY_RIGHT:
#        stdscr.addstr(2, 20, "Right")
#        CrossRoad.update_crossroad(0, CrossRoad.DIR_RIGHT)
#    elif key == curses.KEY_LEFT:
#        stdscr.addstr(3, 20, "Left")
#        CrossRoad.update_crossroad(0, CrossRoad.DIR_LEFT)
#
#curses.endwin()
