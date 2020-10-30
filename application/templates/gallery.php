<?php

echo $twig->render('layouts/_header.html',['clientJson'=>$clientJson]);
echo $twig->render('layouts/_footer.html',['clientJson'=>$clientJson]);