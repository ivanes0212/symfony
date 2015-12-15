<?php

namespace Uni\Bundle\musicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uniMusicaBundle:Default:index.html.twig', array('name' => $name));
    }
     public function musicaAction()
    {

 $datos=array (
              array ("titulo"=>"Gatillazo ", "descripcion"=>"Grupo precedente de Agurain"
                  , "foto"=>"gatillazo.jpeg","articulo"=>"Nunca quisimos hacerlo, pero las circunstancias nos obligaron. La necesidad se confabuló con la ocasión y caímos en la trampa sin remordimientos. Podríamos haberlo evitado, pero también podríamos morirnos de hambre. Así que una vez más recorreremos la azarosa senda de los titiriteros junto a personas que de esta manera podrán ver nuestros vistosos carromatos, nuestros extravagantes ropajes y oír nuestras irreverentes canciones y sacar de ello sus propias conclusiones. Para bien o para mal aquí están GATILLAZO .
No esperéis nada nuevo, ni nada innovador, tal y como está el mundo no estamos para experimentos.
Seguimos con la misma mala hostia y ganas de revolver, el enemigo es el de siempre.
Pollo que no cacarea Gatillazo que resuena...
Un nuevo partido, un montón de lesionados, el árbitro siempre en contra, una afición temible y un equipo con resaca...!! "),
     
		array ("titulo"=>"Kaotiko ", "descripcion"=>"Grupo precedente de Vitoria"
                  , "foto"=>"kaotiko.jpeg", "articulo"=>"Kaotiko ya va acumulando una buena pila de discos a sus espaldas fruto de las horas de composición efectuadas en el local de ensayo, pero Kaotiko no ha desdeñado durante estos años su relación con la actitud rebelde en sus canciones. En junio de 2000 le pusieron el nombre de Kaotiko estos jóvenes de Agurain (Araba). Kaotiko mantiene intacta su formación desde sus comienzos pero su pegada ha subido un peldaño con este nuevo disco."),
               
                array ("titulo"=>"La Polla", "descripcion"=>"Grupo retirado"
                  , "foto"=>"lapolla.jpeg", "articulo"=>"Inicialmente solían tocar en garajes o bares. Actuaron por primera vez en el bar de su pueblo. En 1983 lanzaron su primer EP ¿Y ahora qué? bajo la discográfica independiente Oihuka. Este trabajo contenía sólo cuatro canciones.

Poco después, en 1984 sacaron un álbum más completo, de 19 canciones, llamado Salve. En sus letras hacen fuertes críticas contra el fascismo, el capitalismo, el nacionalismo, el autoritarismo, el catolicismo, la política, la alienación, la moda, y otros factores de la sociedad, algo que caracterizaría toda su carrera."),
                
                array ("titulo"=>"Segis", "descripcion"=>"Grupo precedente de Salvatierra"
                  , "foto"=>"segis.jpeg", "articulo"=>"Se formaron en octubre del año 1997 influenciados por grupos tanto euskaldunes (Cicatriz) como internacionales (Cock Sparrer). Su primer disco de título homónimo vio la luz en 1998 y vendió más de 5000 copias. Dado el éxito del primer disco, a principios del año 2000 sacaron su segundo disco Mundo Tóxico que contiene temas como Realidad, Pobredumbre u Odio. Ambos discos fueron grabados con Potencial Hardcore. En verano del 2001 graban su tercer disco titulado 1,2,3..Fuego! que contiene una versión del England belongs to me de Cock Sparrer, titulada Euskadi. Este disco fue grabado con Locomotive Music. Tras sacar el tercer disco, estuvieron girando con La Polla por España y formaron La Línea de Ataque con Boikot y Disidencia, lo que les llevó a los escenarios de los festivales más importantes a nivel nacional.")
	);

 return $this->render('uniMusicaBundle:Default:musica.html.twig', array(
            'grupos'=> $datos,
	   
           
                ));
     }

    public function gruposAction($titulo,$descripcion,$foto,$articulo)
    {
        return $this->render('uniMusicaBundle:grupos:noticias.html.twig',array(
'titulo'=>$titulo,
'descripcion'=>$descripcion,
'foto'=>$foto,
'articulo'=>$articulo
                
	));

    }
 
}
