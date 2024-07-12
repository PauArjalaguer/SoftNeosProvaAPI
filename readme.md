// he hagut de fer primer el config:clear,  les migracions petaven fins que ho he fet

// crear post funciona

// editar post : compact(): Undefined variable: post
   //afegit un findorfail que busqui l' id 

// mostrar post Class 'GuzzleHttp\Client' not found
    // instalo guzzle composer require guzzlehttp/guzzle
    // ha petat i he hagut de fer --ignore-platform-req=ext-fileinfo perque no anava ni habilitant fileinfo al php.ini
    // un cop instal·lat he hagut de tornar a fer l' use perque havia desaparegut

//delete funciona
    // em molesta una mica que el boto de delete sigui un boto mentre que els altres son <a> Valorar si entra dins de l' exercici

//elimino comentaris, la majoria de funcions son bastant breus i amb noms clars. Les que no, es canviaràn.

// hi havia funcions al controlador que ja estaven al model
// trec els compact a les funcions que retornen un únic array
// trec comentaris 
// elimino una crida a aux_post_calc a l' update que no te cap sentit
// elimino la funció duplicatePost, que no només s' aplica enlloc sinó que no està ni acabada
// a les routes també hi havia una funció de duplicar posts

//En el model s' elimina el nom de la definició del nom de la taula, ja que es la que té per defecte i es redundant
// Es canvia el nom a aux_post_calc a un nom més concret. getSummaryAttributeCalculation que indica que fa i ho relaciona amb la funció que el crida 

// Les crides del controlador al model son generalment d' una o dues linies, tenen prou legibilitat per a no crear funcions al model i haver d' anar saltant d' un arxiu a un altre

// poso APP Debug en false

