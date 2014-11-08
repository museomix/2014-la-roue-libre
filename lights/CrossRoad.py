import time

import pysimpledmx

DIR_RIGHT=1
DIR_LEFT=0
DIR_UP=2
DIR_DOWN=3


class Lane:
    dmx_channel = 0
    dmx_handle = None
    passerby = 0

    def __init__(self, channel):
        self.dmx_channel = channel
        self.dmx_handle = pysimpledmx.DMXConnection(self.dmx_channel)

        self.dmx_handle.setChannel(1, 15) # set DMX channel 1 to full
        self.dmx_handle.setChannel(2, 255) # set DMX channel 2 to 128
        self.dmx_handle.setChannel(3, 255)   # set DMX channel 3 to 0
        self.dmx_handle.setChannel(4, 0)   # set DMX channel 3 to 0
        self.dmx_handle.setChannel(17, 15) # set DMX channel 1 to full
        self.dmx_handle.setChannel(18, 0) # set DMX channel 2 to 128
        self.dmx_handle.setChannel(19, 255)   # set DMX channel 3 to 0
        self.dmx_handle.setChannel(20, 0)   # set DMX channel 3 to 0
        self.dmx_handle.render()

    def update(self):
        print("dmx %d : passerby %s" % (self.dmx_channel, self.passerby))
        self.passerby += 1
        self.dmx_handle.setChannel(1+(self.dmx_channel-1)*16, self.passerby, autorender=True)


CROSSROADS = [[Lane(1), Lane(2)],
                     ]

def update_crossroad(crossroad, direction):
    CROSSROADS[crossroad][direction].update()
