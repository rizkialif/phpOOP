<?php

/* 
    Fungsi untuk membuat intro
 */

function buat_intro(string $konten, int $panjang_konten, string $link, int $id_konten) {
    $konten = strip_tags($konten);
    if (strlen($konten) > $panjang_konten) {
        $intro = substr($konten, 0, $panjang_konten);
        $akhir = strrpos($intro, ' ');
        $konten = $akhir ? substr($intro, 0, $akhir) : substr($intro, 0);
        $konten .= '... <br><a href="'.$link.'.php?id='.$id_konten.'">Baca Selengkapnya</a>';
    }
    return $konten;
}

/* 
    Fungsi untuk mensanitasi script
 */

function kucilkan_script(string $output) {
    $output = str_replace('<script>', '', $output);
    $output = str_replace('</script>', '', $output);
    return $output;
}