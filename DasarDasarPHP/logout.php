<?php
session_start();
session_destroy();

header('Location: pertemuan1.php?pesan=logout');