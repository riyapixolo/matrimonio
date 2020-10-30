<?php

echo $twig->render('layouts/_header.html',['clientJson'=>$clientJson]);
echo $twig->render('_slider.html',['clientJson'=>$clientJson]);
echo $twig->render('_about.html',['clientJson'=>$clientJson]);
echo $twig->render('_love-story.html',['clientJson'=>$clientJson]);
echo $twig->render('_rsvp.html',['clientJson'=>$clientJson]);
echo $twig->render('layouts/_footer.html',['clientJson'=>$clientJson]);
