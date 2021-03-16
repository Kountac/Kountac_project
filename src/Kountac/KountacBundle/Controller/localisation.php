<?php

/* Code for Geolocalisation by ChrisME */
$pays = "";
$devise = "";
$ip = $_SERVER['REMOTE_ADDR']; // Recuperation de l'IP du visiteur
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip)); //connection au serveur de ip-api.com et recuperation des données
//var_dump($query);
if($query && $query['status'] == 'success') 
{
    //code avec les variables
    //echo "Bonjour visiteur de " . $query['country'] . "," . $query['city'];
    $pays = $query['country'];
}

if($pays == "France")
{
    $devise = "euro";
    $session->set('euro', '1');

    if ($session->has('cfa'))
        $session->remove('cfa');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('naira'))
        $session->remove('naira');

} else if($pays == "Germany")
{
    $devise = "all";
    $session->set('all', '1');

    if ($session->has('cfa'))
        $session->remove('cfa');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('euro'))
        $session->remove('euro');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('naira'))
        $session->remove('naira');

} else if($pays == "United Kingdom")
{
    $devise = "livre";
    $session->set('livre', '1');

    if ($session->has('euro'))
        $session->remove('euro');
    
    if ($session->has('cfa'))
        $session->remove('cfa');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('naira'))
        $session->remove('naira');
        
} else if($pays == "Cameroon")
{
    $devise = "cfa";
    $session->set('cfa', '1');

    if ($session->has('euro'))
        $session->remove('euro');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('naira'))
        $session->remove('naira');
        
} else if($pays == "United states")
{
    $devise = "usa";
    $session->set('usa', '1');

    if ($session->has('euro'))
        $session->remove('euro');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('cfa'))
        $session->remove('cfa');
    
    if ($session->has('naira'))
        $session->remove('naira');

} else if($pays == "Nigeria")
{
    $devise = "naira";
    $session->set('naira', '1');

    if ($session->has('euro'))
        $session->remove('euro');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('cfa'))
        $session->remove('cfa');

} else if($pays == "")
{
    // $devise = "cfa";
    // $session->set('cfa', '1');

    // if ($session->has('euro'))
    //     $session->remove('euro');
    
    // if ($session->has('livre'))
    //     $session->remove('livre');
    
    // if ($session->has('all'))
    //     $session->remove('all');
    
    // if ($session->has('usa'))
    //     $session->remove('usa');
    
    // if ($session->has('naira'))
    //     $session->remove('naira');
        
    $devise = "euro";
    $session->set('euro', '1');

    if ($session->has('cfa'))
        $session->remove('cfa');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('naira'))
        $session->remove('naira');

}else
{
    $devise = "euro";
    $session->set('euro', '1');

    if ($session->has('cfa'))
        $session->remove('cfa');
    
    if ($session->has('livre'))
        $session->remove('livre');
    
    if ($session->has('all'))
        $session->remove('all');
    
    if ($session->has('usa'))
        $session->remove('usa');
    
    if ($session->has('naira'))
        $session->remove('naira');
}
