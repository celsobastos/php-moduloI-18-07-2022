<?php

if($file_type[1] !== 'jpeg') {
    header('location: /?image=error');
    die;
} 
