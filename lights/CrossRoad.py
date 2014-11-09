import time

import pysimpledmx

DIR_RIGHT=1
DIR_LEFT=0
DIR_UP=2
DIR_DOWN=3

colors = [[255, 255, 0],
          [255, 0, 255],
          [0, 255, 255]]

DMX = pysimpledmx.DMXConnection(None)

class Lane:
    dmx_channel = 0
    dmx_handle = None
    passerby = 0

    def __init__(self, channel):
        self.dmx_channel = channel
        self.dmx_handle = DMX

        # intensity
        self.dmx_handle.setChannel(16*(self.dmx_channel-1)+1, 15)

        # color
        for i in range(3):
            print("channel %d, value %d" % (16*(self.dmx_channel-1)+i+2,
                                       colors[self.dmx_channel-1][i]))

            self.dmx_handle.setChannel(16*(self.dmx_channel-1)+i+2,
                                       colors[self.dmx_channel-1][i])

        self.dmx_handle.render()

    def passby(self):
        self.passerby += 1

    def update(self):
        print("dmx %d : passerby %s" % (self.dmx_channel, self.passerby))
        self.dmx_handle.setChannel(1+(self.dmx_channel-1)*16, self.passerby)


CROSSROADS = [[Lane(1), Lane(2), Lane(3)],
                     ]

def update_crossroad(crossroad, direction):
    CROSSROADS[crossroad][direction].passby()
    for i in range(len(CROSSROADS[crossroad])):
        CROSSROADS[crossroad][i].update()
    CROSSROADS[0][0].dmx_handle.render()
