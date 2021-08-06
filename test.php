<?php
                $userid = "665831333708300318";
                $a = file_get_contents('https://api.void.cf/discord?type=user&id='.$userid);
                $b = json_decode($a, true);
                print($b['data']['avatarURL']);
            ?>