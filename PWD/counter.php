<?php // tag pembuka php
    $filecounter = "counter.txt"; // untuk menyimpan file angka pengunjung
    $fl = fopen($filecounter,"r+");
    $hit = fread($fl,filesize($filecounter));

    echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
    echo("<td width=250 v align=middle align=center>");
    echo("<font face=verdana size=2 color=#FF0000><b>");
    echo("Anda pengunjung yang ke : ");
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");
    fclose($fl); // tag untuk menutup table

    $fl=fopen($filecounter,"w+"); // untuk membuka file
    $hit = $hit + 1;
    fwrite($fl, $hit , strlen($hit));
    fclose($fl); // untuk menutup file pengunjung

?> // tag penutup php
