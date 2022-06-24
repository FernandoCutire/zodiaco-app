<?php

namespace Models;
class SignoZodiacalFrances
{
    private $signoZodiacal;
    private $lectura;
    private $variable;
    private $nombreCaballero;
    private $imagen;
    private $zodiaco;
    private $descCaballero;
    private $fuente;
    private $fechaLarga;

    // Diferentes signos zodiacales
    public $aries = array("Signo" => "Bélier ♈",
        "FechaLarga" => "21 mars au 19 avril",
        "Lectura" => "Cette journée vous apportera la 
        possibilité de vous consacrer à des choses qui vous intéressent beaucoup au quotidien et pour 
        lesquelles vous n'avez pas toujours le temps. 
        Peut-être décidez-vous aujourd'hui de lire un livre, d'étudier ou de mettre sur 
        papier certains des projets qui vous préoccupent depuis longtemps."
    , "NCaballero" => "Mu Aries"
    , "DesCaballero" => "Mu est télépathique et télékinésie. Connu pour avoir les pouvoirs mentaux les plus puissants parmi les 12 Saints d'Or, 
    il est admis par Aioria lui-même dans son combat contre les Spectres dans la Maison du Lion. 
    Le Saint du Bélier est un incroyable manipulateur de téléportation, avec suffisamment de 
    puissance pour transporter lui-même ou plusieurs personnes dans des endroits très éloignés, 
    voire d'autres dimensions. Avec ses pouvoirs psychiques, il peut également créer des illusions comme celles qu'il a fait voir aux Silver Saints et ainsi confondre les Bronze Saints avec les Black Saints. Il peut voler grâce à sa télékinésie."
    , "Imagen" => "../../../resources/imgs/caballeros/Mu_Aries-zodiaco.jpg",
        "zodiaco" => "imgs/aries.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Mu_de_Aries#Habilidades"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "3", "Mes_fin" => "4");


    public $tauro = array("Signo" => "Taureau ♉",
        "FechaLarga" => "20 avril au 20 mai",
        "Lectura" => "Les vôtres en vacances sont ce que beaucoup aimeraient pour eux-mêmes, 
        Taureau. Vous faites généralement des projets avec les gens au 
        quotidien et ils se réalisent ou non, mais vous cherchez toujours un 
        autre débouché pour passer un bon moment, afin que tout le monde s'amuse. 
        C'est très appréciable, tout le monde ne sait pas s'organiser pour faire 
        les choses en groupe, encore moins changer de cap et sortir un plan B si le plan A tourne mal."
    , "NCaballero" => "Aldebarán"
    , "DesCaballero" => "Aldebaran est un personnage du manga et anime Saint Seiya connu en espagnol sous le nom de Los Caballeros del Zodiaco. 
    Il était le Saint d'Or du Taureau jusqu'à sa mort aux mains de Niobe des Profondeurs, 
    après quoi il a été ressuscité par Athéna, mais est mort à nouveau avec les Chevaliers d'Or au Mur des Lamentations."
    , "Imagen" => "../../../resources/imgs/caballeros/Aldebaran_Tauro-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/tauro.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Aldebar%C3%A1n_de_Tauro"
    , "Dia_ini" => "21", "Dia_fin" => "20", "Mes_ini" => "4", "Mes_fin" => "5");


    public $geminis = array("Signo" => "Gémeaux ♊",
        "FechaLarga" => "21 mai au 20 juin",
        "Lectura" => "Cette journée vous apportera la possibilité de vous consacrer à 
        des choses qui vous intéressent beaucoup au quotidien et pour 
        lesquelles vous n'avez pas toujours le temps. 
        Peut-être décidez-vous aujourd'hui de lire un livre, d'étudier ou de 
        mettre sur papier certains des projets qui vous préoccupent depuis longtemps."
    , "NCaballero" => "Saga Géminis"
    , "DesCaballero" => "Cronos remet le poignard d'or à Saga, avec lequel il tuerait Athéna mais est découvert par Aiolos. 
    Des années plus tard, il apparaît comme un pontife, apparemment sous le commandement de Pontos essayant 
    d'éliminer Aioria. Après que Shaka ait senti un cosmos maléfique posséder Galan, il appelle le 
    rassemblement d'or. Lors de cette même réunion, 
    il envoie le Saint du Lion combattre Hypérion des Ténèbres qui attaquait le Sanctuaire. 
    Il expliquerait ensuite aux Gold Saints restants que les Titans sont revenus pour s'emparer du Megas Drepanon et ressusciter le grand dieu Chronos."
    , "Imagen" => "../../../resources/imgs/caballeros/Saga_Gemini-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/geminis.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Saga_de_G%C3%A9minis#Biograf%C3%ADa"
    , "Dia_ini" => "21", "Dia_fin" => "20", "Mes_ini" => "5", "Mes_fin" => "6");

    public $cancer = array("Signo" => "Cáncer ♋",
        "FechaLarga" => "21 juin au 22 juillet",
        "Lectura" => "Vous êtes en pleine forme, Cancer, maintenant que vous avez surmonté certains problèmes de baisse 
        d'énergie qui vous ont affecté presque quotidiennement pendant la semaine, 
        vous avez retrouvé la santé et l'énergie. Aujourd'hui, cela se voit sur votre visage et dans votre façon de 
        parler et de bouger. C'est précisément pour cette raison, parce que vous êtes l'image vivante 
        de la force, que vous pourriez recevoir aujourd'hui un appel ou la visite 
        d'une personne que vous appréciez et qui vous parlera d'un problème qu'elle ne sait pas résoudre."
    , "NCaballero" => "Deathmask"
    , "DesCaballero" => "Deathmask est d'un caractère sévère et impitoyable. Saisissant toujours toutes 
    les occasions de laisser éclater sa nature cruelle sans jamais montrer aucune sorte de 
    considération, il ne se propose que de suivre sa propre conception de la justice ou 
    l'idéal qu'il choisit de suivre gouverné par quelqu'un d'autre."
    , "Imagen" => "../../../resources/imgs/caballeros/DeathMask_Cancer-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/cancer.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Death_Mask_de_C%C3%A1ncer"
    , "Dia_ini" => "21", "Dia_fin" => "22", "Mes_ini" => "6", "Mes_fin" => "7");

    public $leo = array("Signo" => "Leo ♌",
        "FechaLarga" => "23 juillet au 22 août",
        "Lectura" => "Lion, aujourd'hui, vous pouvez recevoir un appel concernant une question de travail. 
        Prenez-en soin car c'est quelque chose d'important qui peut avoir un impact positif sur votre 
        avenir et aussi sur votre poche. Il ne s'agit pas de laisser tomber simplement parce que c'est un jour férié. Votre bien-être quotidien peut en dépendre."
    , "NCaballero" => "Aiola"
    , "DesCaballero" => "Aiolia (ア イ オ リ ア, Aioria ) était le Gold Saint de Leo dans la génération du 20e siècle 
    jusqu'à la guerre contre Hadès en 1990. Aiolia est un personnage du manga et de l'anime Saint Seiya 
    connu sous le nom de The Knights of the Zodiac et le protagoniste des spin-offs. 
    Episode.G et Soul of Gold. Il est le frère cadet d'Aiolos, malgré sa personnalité quelque peu explosive, 
    il a un cœur pur qui identifie rapidement la justice, c'est pourquoi il a été l'un des premiers saints à 
    reconnaître l'autorité d'Athéna. Comme son frère Aiolos a été qualifié de traître, Aiolia s'est sentie 
    obligée d'effacer le nom de famille en jurant allégeance au pape et même en participant 
    volontairement à l'extermination des saints de bronze \"voyous\"."
    , "Imagen" => "../../../resources/imgs/caballeros/Aiolia_Leo-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/leo.webp",
        "Fuente" => "https://saintseiya.fandom.com/es/wiki/Aiolia_de_Leo"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "7", "Mes_fin" => "8");

    public $virgo = array("Signo" => "Vierge ♍",
        "FechaLarga" => "23 août au 22 septembre",
        "Lectura" => "Aujourd'hui n'est pas une bonne journée pour les 
        problèmes liés à l'argent, Vierge. Ne le mettez pas dans votre sac à dos car il 
        pourrait être volé et ne tentez pas les jeux de hasard car vous perdrez à coup sûr. De plus, vous 
        pourriez trouver quelqu'un que vous connaissez qui veut vous frapper et vous ne sauriez pas dire non, 
        comme cela vous arrive tous les jours. Ce n'est pas que vous aidiez ceux qui en ont besoin, mais aujourd'hui 
        votre argent risque de changer de poche sans que cela soit nécessaire à celui qui va le recevoir. Protégez vos biens"
    , "NCaballero" => "Shaka"
    , "DesCaballero" => "Shaka est un personnage qui se distingue par sa sérénité et sa sagesse, comprenant parfaitement 
    la physiologie de l'homme et du monde. Il montre des attitudes d'arrogance, de supériorité et surtout de vantardise et 
    d'arrogance dans ses combats contre des êtres qu'il considère comme inférieurs à lui, comme les saints 
    de bronze ou les spectres de classe inférieure. Malgré son calme, Shaka est un homme qui s'énerve 
    facilement et agit cruellement comme le montre sa rencontre avec Ikki; en plus il manque totalement de pitié."
    , "Imagen" => "../../../resources/imgs/caballeros/Shaka_Virgo-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/virgo.webp",
        "Fuente" => "https://saintseiya.fandom.com/es/wiki/Shaka_de_Virgo"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "8", "Mes_fin" => "9");

    public $libra = array("Signo" => "Libra ♎",
        "FechaLarga" => "23 septembre au 22 octobre",
        "Lectura" => "Vous avez tendance à échapper à la vraie vie, Balance. Vous voyez chaque jour tout ce qui concerne votre propre vie 
        comme s'il s'agissait d'un film, avec des personnages fictifs. Et, bien sûr, vous montez vous-même l'intrigue, à votre guise, 
        mais comme vous aimez souffrir, le film est du genre dramatique. Aujourd'hui, vous devez ouvrir les yeux et réaliser qu'il n'y a 
        pas grand-chose, que vos problèmes ont des solutions, plus d'une. Il vous suffit de décider de vous mettre à votre place et d'agir 
        pour que les choses changent positivement pour vous."
    , "NCaballero" => "Dohko "
    , "DesCaballero" => "Chevalier d'or Balance. Né en Chine. Il est le seul survivant des deux survivants de la précédente 
    guerre sainte, respectueusement appelé \"vieux maître\" par tous. Même si les chevaliers se battent généralement avec leur corps, 
    l'armure de la Balance a des armes comme l'épée, la lance, etc. Ces armes sont assez 
    puissantes pour détruire les étoiles, elles ne peuvent donc pas être utilisées sans la permission d'Athéna. 
    Dohko possède également un grand pouvoir dans son poing, comme sa technique mortelle \"Les Cent Dragons de Rozan\"."
    , "Imagen" => "../../../resources/imgs/caballeros/Dohko_Libra-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/libra.webp",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "9", "Mes_fin" => "10");

    public $escorpio = array("Signo" => "Scorpion ♏",
        "FechaLarga" => "23 octobre au 21 novembre",
        "Lectura" => "Le jour est venu où vous pourrez améliorer votre relation à des niveaux optimaux, Scorpion. 
        Si vous avez traversé une étape trop routinière ou que cela vous a fatigué de rencontrer cette personne quotidiennement ou très souvent, 
        aujourd'hui ce sentiment va disparaître. Les astres rehaussent votre côté le plus romantique et vous allez le surprendre, car cela faisait 
        longtemps que vous n'aviez pas été aussi affectueux et passionné."
    , "NCaballero" => "Milo"
    , "DesCaballero" => "Chevalier d'or Scorpion. Né en Grèce. Comme Aioria, il est impulsif et a un sens aigu de la justice. Il est très fier d'être chevalier d'or. Sa technique \"Scarlet Needle\", 
    qui en pointant du bout de l'ongle et en faisant 15 piqûres paralyse les cinq sens de l'adversaire en 
    paralysant le système nerveux. Le chevalier d'or Verseau Camus est son meilleur ami."
    , "Imagen" => "../../../resources/imgs/caballeros/Milo_Escorpio-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/escorpio.webp",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "10", "Mes_fin" => "11");

    public $sagitario = array("Signo" => "Sagittaire ♐",
        "FechaLarga" => "23 novembre au 20 décembre",
        "Lectura" => "Il est rarement possible de repartir pratiquement de zéro sur certains sujets qui vous ont 
        causé des problèmes et des soucis au quotidien, Sagittaire, mais aujourd'hui votre conjonction 
        astrale vous offre cette opportunité comme le plus beau des cadeaux. Aujourd'hui, 
        il y aura une situation qui vous fera rediriger votre vie."
    , "NCaballero" => "Aioros"
    , "DesCaballero" => "Appelé \"le traître\" pour l'incident de la tentative 
    d'assassinat d'Athéna. Cependant, il est un modèle exemplaire de chevalier qui, bien qu'ayant gagné le mépris des autres, 
    a sauvé Athéna au prix de sa vie. En tant que candidat au prochain grand prêtre, on n'en attend pas moins de son excellent esprit, 
    de son corps et de sa technique, quel que soit le sacrifice pour choisir le bon chemin. 
    Enfin, il parvient à retrouver son petit frère Aioria au Mur des Lamentations."
    , "Imagen" => "../../../resources/imgs/caballeros/Aioros_Sagitario-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/sagitario.webp"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "20", "Mes_ini" => "11", "Mes_fin" => "12");

    public $capricornio = array("Signo" => "Capricorne ♑",
        "FechaLarga" => "21 décembre au 19 janvier",
        "Lectura" => "Vous avez hâte de progresser, Capricorne, qu'il y ait des changements positifs dans votre vie et en fait il y en a, surtout ces derniers jours. 
        Certains que vous avez appréciés mais d'autres moins. Il y a quelque chose que vous voulez beaucoup chaque jour et qui 
        jusqu'à présent ne s'est pas matérialisé, mais aujourd'hui cette opportunité peut se présenter."
    , "NCaballero" => "Shura"
    , "DesCaballero" => "Chevalier d'or Capricorne. Né en Espagne. Il est le chevalier qui a mortellement 
    blessé Aioros, après avoir reçu les ordres du Grand Prêtre (Saga). Il avait à l'origine une grande loyauté envers sa déesse. 
    Il est ressuscité sous forme de spectre par Hadès, et suivant les ordres de ce dernier, il effectue des matchs à mort avec ses anciens compagnons. 
    Avec sa technique \"Excalibur\", ses jambes et ses bras deviennent une épée sacrée tranchante."
    , "Imagen" => "../../../resources/imgs/caballeros/Shaka_Virgo-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/aries.webp"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "12", "Mes_fin" => "1");

    public $acuario = array("Signo" => "Aquarium ♒",
        "FechaLarga" => "20 janvier au 18 février",
        "Lectura" => "Votre journée de repos aujourd'hui, Verseau, sera légèrement différente de la normale. Des circonstances personnelles vous amèneront 
        à devoir prêter main-forte à quelqu'un de votre foyer, de votre famille ou de votre cercle d'amis ou de quelqu'un que vous côtoyez tous les jours."
    , "NCaballero" => "Camus"
    , "DesCaballero" => "Chevalier d'or Verseau. Né en France. Derrière sa froideur se cache un cœur chaleureux. 
    En tant que guerrier, plutôt que de douter de ce qui est juste entre le bien et le mal, il continue de se battre selon ses principes. 
    En raison de l'utilisation des techniques de glace, il est considéré comme \"le magicien de l'eau et de la glace\". 
    Sa plus grande technique est la \"Dawn Execution\", dans laquelle l \'esprit de combat se rapproche le plus possible de zéro degré."
    , "Imagen" => "../../../resources/imgs/caballeros/Camus_Acuario-zodiaco.jpg"
    , "zodiaco" => "../../../resources/imgs/acuario.webp",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "20", "Dia_fin" => "18", "Mes_ini" => "1", "Mes_fin" => "2");

    public $piscis = array("Signo" => "Poissons ♓",
        "FechaLarga" => "19 février au 20 mars",
        "Lectura" => "Aujourd'hui, Poissons, votre esprit sera très clair et votre \"antenne parabolique\" fonctionnera à merveille. 
        Suivez les préceptes de votre intuition, qui peut vous mener directement au succès sur les chemins les plus inattendus. 
        Si vous percevez que vous êtes plus intuitif qu'au quotidien, profitez-en et passez en revue les sujets sur 
        lesquels vous aviez des doutes. Si une nouvelle idée vous vient à l'esprit aujourd'hui, soyez assuré qu'elle est correcte."
    , "NCaballero" => "Afrodita"
    , "DesCaballero" => "Chevalier d'or Poissons. Né en Suède. 
    Le plus beau des 88 constellations, il a la conviction que \"Le pouvoir c'est la justice\". 
    Profitez des particularités des roses pour votre cosmos. Son attaque \"Real Devil Roses\" attaque 
    l\'adversaire avec le poison des roses rouges. Bien qu\'il pense que \"le pouvoir est la justice\", 
    il est le chevalier qui désire le plus la paix dans le monde."
    , "Imagen" => "../../../resources/imgs/caballeros/Afrodita_Piscis-zodiaco.jpg"
    , "zodiaco" => "../../../resources/imgs/piscis.webp"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "19", "Dia_fin" => "20", "Mes_ini" => "2", "Mes_fin" => "3");


    /**
     * @return mixed
     */
    public function getNombreCaballero()
    {
        return $this->nombreCaballero;
    }

    /**
     * @param mixed $nombreCaballero
     */
    public function setNombreCaballero($nombreCaballero)
    {
        $this->nombreCaballero = $nombreCaballero;
    }

    /**
     * @return mixed
     */
    public function getSignoZodiacal()
    {
        return $this->signoZodiacal;
    }

    /**
     * @param mixed $signoZodiacal
     */
    public function setSignoZodiacal($signoZodiacal)
    {
        $this->signoZodiacal = $signoZodiacal;
    }

    /**
     * @return mixed
     */
    public function getDescCaballero()
    {
        return $this->descCaballero;
    }

    /**
     * @param mixed $descCaballero
     */
    public function setDescCaballero($descCaballero)
    {
        $this->descCaballero = $descCaballero;
    }


    /**
     * @return mixed
     */
    public function getLectura()
    {
        return $this->lectura;
    }

    /**
     * @param mixed $lectura
     */
    public function setLectura($lectura)
    {
        $this->lectura = $lectura;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }


    /**
     * @return mixed
     */
    public function getImgZodiaco()
    {
        return $this->zodiaco;
    }

    /**
     * @param mixed $zodiaco
     */
    public function setImgZodiaco($zodiaco)
    {
        $this->zodiaco = $zodiaco;
    }

    /**
     * @return mixed
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * @param mixed $fuente
     */
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;
    }

    /**
     * @return mixed
     */
    public function getFechaLarga()
    {
        return $this->fechaLarga;
    }

    /**
     * @param mixed $fechaLarga
     */
    public function setFechaLarga($fechaLarga)
    {
        $this->fechaLarga = $fechaLarga;
    }


    // Funciones de desarrollo
    public function getZodiaco($dUsr, $mUsr)
    {
        switch ($mUsr) {
            case 1:
                if ($dUsr < 21) {
                    $this->getZodiacal($this->capricornio);
                } else {
                    $this->getZodiacal($this->acuario);
                }
                break;

            case 2:
                if ($dUsr < 20) {
                    $this->getZodiacal($this->acuario);
                } else {
                    $this->getZodiacal($this->piscis);
                }
                break;

            case 3:
                if ($dUsr < 21) {
                    $this->getZodiacal($this->piscis);
                } else {
                    $this->getZodiacal($this->aries);
                }
                break;

            case 4:
                if ($dUsr < 21) {
                    $this->getZodiacal($this->aries);
                } else {
                    $this->getZodiacal($this->tauro);
                }
                break;

            case 5:
                if ($dUsr < 20) {
                    $this->getZodiacal($this->tauro);
                } else {
                    $this->getZodiacal($this->geminis);
                }
                break;

            case 6:
                if ($dUsr < 22) {
                    $this->getZodiacal($this->geminis);
                } else {
                    $this->getZodiacal($this->cancer);
                }
                break;

            case 7:
                if ($dUsr < 22) {
                    $this->getZodiacal($this->cancer);
                } else {
                    $this->getZodiacal($this->leo);
                }
                break;

            case 8:
                if ($dUsr < 24) {
                    $this->getZodiacal($this->leo);
                } else {
                    $this->getZodiacal($this->virgo);
                }
                break;

            case 9:
                if ($dUsr < 23) {
                    $this->getZodiacal($this->virgo);
                } else {
                    $this->getZodiacal($this->libra);
                }
                break;

            case 10:
                if ($dUsr < 23) {
                    $this->getZodiacal($this->libra);
                } else {
                    $this->getZodiacal($this->escorpio);
                }
                break;

            case 11:
                if ($dUsr < 23) {
                    $this->getZodiacal($this->escorpio);
                } else {
                    $this->getZodiacal($this->sagitario);
                }
                break;

            case 12:
                if ($dUsr < 21) {
                    $this->getZodiacal($this->sagitario);
                } else {
                    $this->getZodiacal($this->capricornio);
                }
                break;
        }


    }


    function getZodiacal($signo)
    {
        $this->setSignoZodiacal($signo['Signo']);
        $this->setNombreCaballero($signo['NCaballero']);
        $this->setLectura($signo['Lectura']);
        $this->setDescCaballero($signo['DesCaballero']);
        $this->setFuente($signo['Fuente']);
        $this->setImagen($signo['Imagen']);
        $this->setImgZodiaco($signo['zodiaco']);
        $this->setFechaLarga($signo['FechaLarga']);
    }

    // Obtener Signos zodiacales

//    function geAries($dUsrnac, $mesnac, $aries)
//    {
//        $dUsr_inicial = $aries['Dia_ini'];
//        $dUsr_final = $aries['Dia_fin'];
//        $mes_inicial = $aries['Mes_ini'];
//        $mes_final = $aries['Mes_fin'];
//
//        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
//            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
//                $this->setSignoZodiacal($aries['Signo']);
//                $this->setNombreCaballero($aries['NCaballero']);
//                $this->setLectura($aries['Lectura']);
//                $this->setDescCaballero($aries['DesCaballero']);
//                $this->setFuente($aries['Fuente']);
//                $this->setImagen($aries['Imagen']);
//                $this->setFechaLarga($aries['FechaLarga']);
//            }
//        }
//    }

    function getTauro($dUsrnac, $mesnac, $tauro)
    {
        $dUsr_inicial = $tauro['Dia_ini'];
        $dUsr_final = $tauro['Dia_fin'];
        $mes_inicial = $tauro['Mes_ini'];
        $mes_final = $tauro['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($tauro['Signo']);
                $this->setNombreCaballero($tauro['NCaballero']);
                $this->setLectura($tauro['Lectura']);
                $this->setDescCaballero($tauro['DesCaballero']);
                $this->setFuente($tauro['Fuente']);
                $this->setImagen($tauro['Imagen']);
                $this->setImgZodiaco($tauro['zodiaco']);

                $this->setFechaLarga($tauro['FechaLarga']);
            }
        }
    }

    function getGeminis($dUsrnac, $mesnac, $geminis)
    {
        $dUsr_inicial = $geminis['Dia_ini'];
        $dUsr_final = $geminis['Dia_fin'];
        $mes_inicial = $geminis['Mes_ini'];
        $mes_final = $geminis['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($geminis['Signo']);
                $this->setNombreCaballero($geminis['NCaballero']);
                $this->setLectura($geminis['Lectura']);
                $this->setDescCaballero($geminis['DesCaballero']);
                $this->setFuente($geminis['Fuente']);
                $this->setImagen($geminis['Imagen']);
                $this->setImgZodiaco($geminis['zodiaco']);

                $this->setFechaLarga($geminis['FechaLarga']);
            }
        }
    }

    function getCancer($dUsrnac, $mesnac, $cancer)
    {
        $dUsr_inicial = $cancer['Dia_ini'];
        $dUsr_final = $cancer['Dia_fin'];
        $mes_inicial = $cancer['Mes_ini'];
        $mes_final = $cancer['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($cancer['Signo']);
                $this->setNombreCaballero($cancer['NCaballero']);
                $this->setLectura($cancer['Lectura']);
                $this->setDescCaballero($cancer['DesCaballero']);
                $this->setFuente($cancer['Fuente']);
                $this->setImagen($cancer['Imagen']);
                $this->setImgZodiaco($cancer['zodiaco']);

                $this->setFechaLarga($cancer['FechaLarga']);
            }
        }
    }

    function getLeo($dUsrnac, $mesnac, $leo)
    {
        $dUsr_inicial = $leo['Dia_ini'];
        $dUsr_final = $leo['Dia_fin'];
        $mes_inicial = $leo['Mes_ini'];
        $mes_final = $leo['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($leo['Signo']);
                $this->setNombreCaballero($leo['NCaballero']);
                $this->setLectura($leo['Lectura']);
                $this->setDescCaballero($leo['DesCaballero']);
                $this->setFuente($leo['Fuente']);
                $this->setImagen($leo['Imagen']);
                $this->setImgZodiaco($leo['zodiaco']);
                $this->setFechaLarga($leo['FechaLarga']);
            }
        }

    }

    function getVirgo($dUsrnac, $mesnac, $virgo)
    {
        $dUsr_inicial = $virgo['Dia_ini'];
        $dUsr_final = $virgo['Dia_fin'];
        $mes_inicial = $virgo['Mes_ini'];
        $mes_final = $virgo['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($virgo['Signo']);
                $this->setNombreCaballero($virgo['NCaballero']);
                $this->setLectura($virgo['Lectura']);
                $this->setDescCaballero($virgo['DesCaballero']);
                $this->setFuente($virgo['Fuente']);
                $this->setImagen($virgo['Imagen']);
                $this->setImgZodiaco($virgo['zodiaco']);
                $this->setFechaLarga($virgo['FechaLarga']);
            }
        }
    }

    function getLibra($dUsrnac, $mesnac, $libra)
    {
        $dUsr_inicial = $libra['Dia_ini'];
        $dUsr_final = $libra['Dia_fin'];
        $mes_inicial = $libra['Mes_ini'];
        $mes_final = $libra['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($libra['Signo']);
                $this->setNombreCaballero($libra['NCaballero']);
                $this->setLectura($libra['Lectura']);
                $this->setDescCaballero($libra['DesCaballero']);
                $this->setFuente($libra['Fuente']);
                $this->setImagen($libra['Imagen']);
                $this->setImgZodiaco($libra['zodiaco']);
                $this->setFechaLarga($libra['FechaLarga']);
            }
        }
    }

    function getEscorpio($dUsrnac, $mesnac, $escorpio)
    {
        $dUsr_inicial = $escorpio['Dia_ini'];
        $dUsr_final = $escorpio['Dia_fin'];
        $mes_inicial = $escorpio['Mes_ini'];
        $mes_final = $escorpio['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($escorpio['Signo']);
                $this->setNombreCaballero($escorpio['NCaballero']);
                $this->setLectura($escorpio['Lectura']);
                $this->setDescCaballero($escorpio['DesCaballero']);
                $this->setFuente($escorpio['Fuente']);
                $this->setImagen($escorpio['Imagen']);
                $this->setImgZodiaco($escorpio['zodiaco']);
                $this->setFechaLarga($escorpio['FechaLarga']);
            }
        }
    }

    function getSagitario($dUsrnac, $mesnac, $sagitario)
    {
        $dUsr_inicial = $sagitario['Dia_ini'];
        $dUsr_final = $sagitario['Dia_fin'];
        $mes_inicial = $sagitario['Mes_ini'];
        $mes_final = $sagitario['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($sagitario['Signo']);
                $this->setNombreCaballero($sagitario['NCaballero']);
                $this->setLectura($sagitario['Lectura']);
                $this->setDescCaballero($sagitario['DesCaballero']);
                $this->setFuente($sagitario['Fuente']);
                $this->setImagen($sagitario['Imagen']);
                $this->setImgZodiaco($sagitario['zodiaco']);
                $this->setFechaLarga($sagitario['FechaLarga']);
            }
        }
    }

    function getCapricornio($dUsrnac, $mesnac, $capricornio)
    {
        $dUsr_inicial = $capricornio['Dia_ini'];
        $dUsr_final = $capricornio['Dia_fin'];
        $mes_inicial = $capricornio['Mes_ini'];
        $mes_final = $capricornio['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($capricornio['Signo']);
                $this->setNombreCaballero($capricornio['NCaballero']);
                $this->setLectura($capricornio['Lectura']);
                $this->setDescCaballero($capricornio['DesCaballero']);
                $this->setFuente($capricornio['Fuente']);
                $this->setImagen($capricornio['Imagen']);
                $this->setImgZodiaco($capricornio['zodiaco']);
                $this->setFechaLarga($capricornio['FechaLarga']);
            }
        }
    }

    function getAcuario($dUsrnac, $mesnac, $acuario)
    {
        $dUsr_inicial = $acuario['Dia_ini'];
        $dUsr_final = $acuario['Dia_fin'];
        $mes_inicial = $acuario['Mes_ini'];
        $mes_final = $acuario['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($acuario['Signo']);
                $this->setNombreCaballero($acuario['NCaballero']);
                $this->setLectura($acuario['Lectura']);
                $this->setDescCaballero($acuario['DesCaballero']);
                $this->setFuente($acuario['Fuente']);
                $this->setImagen($acuario['Imagen']);
                $this->setImgZodiaco($acuario['zodiaco']);
                $this->setFechaLarga($acuario['FechaLarga']);
            }
        }
    }

    function getPiscis($dUsrnac, $mesnac, $piscis)
    {
        $dUsr_inicial = $piscis['Dia_ini'];
        $dUsr_final = $piscis['Dia_fin'];
        $mes_inicial = $piscis['Mes_ini'];
        $mes_final = $piscis['Mes_fin'];

        if ($mesnac === $mes_inicial || $mesnac === $mes_final) {
            if ($dUsrnac >= $dUsr_inicial || $dUsrnac <= $dUsr_final) {
                $this->setSignoZodiacal($piscis['Signo']);
                $this->setNombreCaballero($piscis['NCaballero']);
                $this->setLectura($piscis['Lectura']);
                $this->setDescCaballero($piscis['DesCaballero']);
                $this->setFuente($piscis['Fuente']);
                $this->setImagen($piscis['Imagen']);
                $this->setImgZodiaco($piscis['zodiaco']);
                $this->setFechaLarga($piscis['FechaLarga']);
            }
        }
    }


}


