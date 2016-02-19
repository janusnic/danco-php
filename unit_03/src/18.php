<?php

$data_file = "17.txt";
copy($data_file, $data_file.'.bak') or die("Could not copy $data_file");

$data_file = "17.txt.bak";
rename($data_file, $data_file.'.old') or die ("Could not rename $data_file");