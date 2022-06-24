<?php

namespace Models;
class SignoZodiacalIngles
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
    public $aries = array("Signo" => "Aries ♈",
        "FechaLarga" => "March 21 to April 19",
        "Lectura" => "This day will bring you the possibility of dedicating yourself to things that interest you a lot on a daily basis and for which you do not always have time. Perhaps you decide today to read a book, to study or to put on paper some of the projects that have been on your mind for a long time."
    , "NCaballero" => "Mu Aries"
    , "DesCaballero" => "Mu is telepathic and telekinetic. Known to have the strongest mental powers among the 12 Gold Saints, he is admitted by Aioria himself in his fight against the Specters in the House of Leo. The Saint of Aries is an incredible manipulator of teleportation, with enough power to transport himself or several people to very distant places, even other dimensions. With his psychic powers he can also create illusions like the ones he made the Silver Saints see and thus confuse the Bronze Saints with the Black Saints. He can fly with the help of his telekinesis."
    , "Imagen" => "../../../resources/imgs/caballeros/Mu_Aries-zodiaco.jpg",
        "zodiaco" => "imgs/aries.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Mu_de_Aries#Habilidades"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "3", "Mes_fin" => "4");


    public $tauro = array("Signo" => "Tauro ♉",
        "FechaLarga" => "April 20 to May 20",
        "Lectura" => "Yours on holidays is what many would like for themselves, Taurus. You usually make plans with people on a daily basis and they come true or not, but you always look for another outlet to have a good time, so that everyone has fun.
         That is much appreciated, not everyone knows how to organize 
         themselves to do things in a group, much less change course and pull out a plan B if plan A goes awry.
"
    , "NCaballero" => "Aldebarán"
    , "DesCaballero" => "Aldebaran is a character from the manga and anime Saint Seiya known in Spanish as Los Caballeros del Zodiaco. He was the Taurus Gold Saint until his death at the hands of Niobe of the Deep, after which he was revived by Athena, but died again with the Golden Knights at the Wailing Wall."
    , "Imagen" => "../../../resources/imgs/caballeros/Aldebaran_Tauro-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/tauro.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Aldebar%C3%A1n_de_Tauro"
    , "Dia_ini" => "21", "Dia_fin" => "20", "Mes_ini" => "4", "Mes_fin" => "5");


    public $geminis = array("Signo" => "Géminis ♊",
        "FechaLarga" => "May 21 to June 20",
        "Lectura" => "This day will bring you the possibility of dedicating 
        yourself to things that interest you a lot on a daily basis 
        and for which you do not always have time. 
        Perhaps you decide today to read a book, 
        to study or to put on paper some of the projects that have been on your mind for a long time.
"
    , "NCaballero" => "Saga Géminis"
    , "DesCaballero" => "Cronos hands the golden dagger to Saga, with it he would kill Athena but he is discovered by Aiolos. Years later he appears as pontiff, apparently under the command of Pontos trying to eliminate Aioria.
     After Shaka senses an evil cosmos possessing Galan, she calls the golden gathering. 
     In that same meeting, she sends the Saint of Leo to fight against Hyperion of Darkness who was attacking the Sanctuary. He would later explain to the remaining Gold Saints that the Titans have returned to seize the Megas Drepanon and resurrect the great god Cronos."
    , "Imagen" => "../../../resources/imgs/caballeros/Saga_Gemini-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/geminis.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Saga_de_G%C3%A9minis#Biograf%C3%ADa"
    , "Dia_ini" => "21", "Dia_fin" => "20", "Mes_ini" => "5", "Mes_fin" => "6");

    public $cancer = array("Signo" => "Cáncer ♋",
        "FechaLarga" => "June 21 to July 22",
        "Lectura" => "You're in good shape, Cancer, now that you've overcome some energy slump problems that have affected you almost 
        daily during the week, you're back to having plenty of health and energy. 
        Today it shows in your face and in the way you speak and move. 
        Precisely for this reason, because you are the living image of strength, today you could receive a 
        call or a visit from someone you appreciate who will tell you about a problem that they do not know how to solve."
    , "NCaballero" => "Deathmask"
    , "DesCaballero" => "Deathmask is of a severe and ruthless character. Always taking any opportunity 
    to let out his cruel nature without ever showing any kind of consideration, 
    he only sets out to follow his own concept of justice or the ideal he chooses to follow governed by someone else."
    , "Imagen" => "../../../resources/imgs/caballeros/DeathMask_Cancer-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/cancer.webp",
        "Fuente" => "https://es.wikipedia.org/wiki/Death_Mask_de_C%C3%A1ncer"
    , "Dia_ini" => "21", "Dia_fin" => "22", "Mes_ini" => "6", "Mes_fin" => "7");

    public $leo = array("Signo" => "Leo ♌",
        "FechaLarga" => "July 23 to August 22",
        "Lectura" => "Leo, today you may receive a call regarding a work matter. 
        Take care of it because it is something important that can have a positive 
        impact on your future and also on your pocket. 
        It's not a matter of casually letting it go just because it's a holiday. Your daily well-being may depend on it."
    , "NCaballero" => "Aiola"
    , "DesCaballero" => "Aiolia (アイオリア, Aioria) was Leo's Gold Saint in the 20th 
    century generation until the War against Hades in 1990. 
    Aiolia is a character from the manga and anime Saint Seiya known as The Knights of the Zodiac and the protagonist of the spin-offs. 
    Episode.G and Soul of Gold. He is the younger brother of Aiolos, 
    despite his somewhat explosive personality, he has a pure heart that quickly identifies justice, that is why he was one of the first saints to recognize Athena's authority. 
    As his brother Aiolos was branded a traitor, Aiolia felt an obligation to clear the family name by swearing allegiance 
    to the Pope and even willingly participating in the extermination of the rogue Bronze Saints."
    , "Imagen" => "../../../resources/imgs/caballeros/Aiolia_Leo-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/leo.webp",
        "Fuente" => "https://saintseiya.fandom.com/es/wiki/Aiolia_de_Leo"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "7", "Mes_fin" => "8");

    public $virgo = array("Signo" => "Virgo ♍",
        "FechaLarga" => "August 23 to September 22",
        "Lectura" => "Today is not a good day for money-related issues, Virgo. Do not put it in your backpack because it could be 
        stolen and do not try games of chance because you will lose for sure. 
        What's more, you could find someone you know who wants to hit you and 
        you wouldn't know how to say no, as happens to you every day. 
        It is not that you help those who need it, but today your money runs the risk of changing your 
        pocket without it being necessary for the one who is going to receive it. Protect your belongings"
    , "NCaballero" => "Shaka"
    , "DesCaballero" => "Shaka is a character that stands out for his serenity and wisdom, understanding the physiology of man and the world perfectly. He shows attitudes of arrogance, superiority, and above all, bragging and arrogance in his fights against beings he considers inferior to him, such as Bronze Saints or low-class Specters. Despite his calmness, Shaka is a man who becomes easily annoyed and acts cruelly as shown in his encounter with Ikki; plus he totally lacks mercy."
    , "Imagen" => "../../../resources/imgs/caballeros/Shaka_Virgo-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/virgo.webp",
        "Fuente" => "https://saintseiya.fandom.com/es/wiki/Shaka_de_Virgo"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "8", "Mes_fin" => "9");

    public $libra = array("Signo" => "Libra ♎",
        "FechaLarga" => "23 de septiembre al 22 de octubre",
        "Lectura" => "You have a tendency to evade real life, Libra. You are seeing every day everything that concerns your own life as if it were a movie, with fictional characters. And, of course, you set up the plot yourself, to your liking, but since you like to suffer, the film is of the drama genre. Today you have to open your eyes and realize that there is no big deal, that your problems have solutions, more than one. You just need to decide to put yourself in your place and act so that things change positively for you."
    , "NCaballero" => "Dohko "
    , "DesCaballero" => "Libra gold knight. Born in China. He is the only one left alive of the two survivors of the previous holy war, 
    respectfully called Old Master by all. 
    Even though knights usually fight with their bodies, Libra's armor has weapons such as sword, spear, etc. 
    These weapons are powerful enough to destroy stars, so they cannot be used without Athena's permission. 
    Dohko also possesses great power in his fist, such as his The Hundred Dragons of Rozan deadly technique."
    , "Imagen" => "../../../resources/imgs/caballeros/Dohko_Libra-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/libra.webp",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "9", "Mes_fin" => "10");

    public $escorpio = array("Signo" => "Escorpio ♏",
        "FechaLarga" => "October 23 to November 21",
        "Lectura" => "The day has come when you can improve your relationship to optimal levels, Scorpio. If you have gone through a stage that is too routine 
        or it made you tired to meet that person daily or very often, today this feeling will disappear. 
        The stars enhance your most romantic side and you are going to surprise him, 
        because it had been a long time since you were so affectionate and passionate."
    , "NCaballero" => "Milo"
    , "DesCaballero" => "Scorpio gold knight. Born in Greece. Like Aioria, he is impulsive and has a strong sense of justice. 
    He is very proud to be a gold knight. His technique \"Scarlet Needle\" , 
    which by pointing with the tip of the nail and making 15 punctures paralyzes the opponent's five senses 
    by paralyzing the nervous system. The gold knight Aquarius Camus is his best friend."
    , "Imagen" => "../../../resources/imgs/caballeros/Milo_Escorpio-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/escorpio.webp",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "10", "Mes_fin" => "11");

    public $sagitario = array("Signo" => "Sagitario ♐",
        "FechaLarga" => "November 23 to December 20",
        "Lectura" => "There is seldom an opportunity to start again practically from scratch on some issues that have caused you problems and worries on a daily basis, 
        Sagittarius, but today your astral conjunction gives you this opportunity as the best gift. 
        Today there will be a situation that will make you redirect your life."
    , "NCaballero" => "Aioros"
    , "DesCaballero" => "Sagittarius gold knight. Born in Greece. He died disgraced as \"the traitor\" 
    by the attempted assassination of Athena incident. However, he is an exemplary model of a knight, 
    who despite having earned the contempt of others, saved Athena at the cost of her life. 
    As a contender for the next high priest, no less is expected of his excellent spirit, body, and technique, 
    regardless of the sacrifice to choose the right path. Finally, he manages to reunite with his little brother Aioria at the Wailing Wall."
    , "Imagen" => "../../../resources/imgs/caballeros/Aioros_Sagitario-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/sagitario.webp"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "20", "Mes_ini" => "11", "Mes_fin" => "12");

    public $capricornio = array("Signo" => "Capricornio ♑",
        "FechaLarga" => "December 21 to January 19",
        "Lectura" => "You are looking forward to progress, Capricorn, that there are positive changes in your life and in fact there are, 
        especially in the last few days. Some you have appreciated but others not so much. 
        There is something that you want a lot every day and that until now has not materialized, but today this opportunity may arise."
    , "NCaballero" => "Shura"
    , "DesCaballero" => "Capricorn gold knight. Born in Spain. He is the knight who mortally wounded Aiolos, after receiving orders from the High Priest (Saga). He had a high loyalty to his goddess. 
    He is resurrected in the form of a specter by Hades, and following his orders, 
    he carried out death matches with his former companions. 
    With his technique \"Excalibur\" his legs and arms become a sharp holy sword."
    , "Imagen" => "../../../resources/imgs/caballeros/Shaka_Virgo-zodiaco.jpg",
        "zodiaco" => "../../../resources/imgs/aries.webp"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "12", "Mes_fin" => "1");

    public $acuario = array("Signo" => "Acuario ♒",
        "FechaLarga" => "January 20 to February 18",
        "Lectura" => "Your rest day today, Aquarius, will be slightly different than usual. 
        Personal circumstances will lead you to have to lend a hand to someone in 
        your home, your family or your circle of friends or someone you see every day."
    , "NCaballero" => "Camus"
    , "DesCaballero" => "Aquarius gold knight. Born in France. Behind his coldness hides a warm heart. 
    As a warrior, rather than doubt what is right between good and bad, he continues to fight according to his principles. 
    For the use of ice techniques he is considered as \"the magician of water and ice\". 
    His greatest technique is the \"Dawn Execution\", in which the battle spirit reaches the closest to zero degrees."
    , "Imagen" => "../../../resources/imgs/caballeros/Camus_Acuario-zodiaco.jpg"
    , "zodiaco" => "../../../resources/imgs/acuario.webp",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "20", "Dia_fin" => "18", "Mes_ini" => "1", "Mes_fin" => "2");

    public $piscis = array("Signo" => "Piscis ♓",
        "FechaLarga" => "February 19 to March 20",
        "Lectura" => "Today, Pisces, your mind will be very clear and your “satellite dish” will work wonderfully. 
        Follow the dictates of your intuition, which can lead you directly to success along the most unexpected paths. 
        If you perceive that you are more intuitive than on a daily basis, 
        take advantage of it and review those topics in which you had doubts. 
        If a new idea comes to mind today, rest assured that it is correct."
    , "NCaballero" => "Afrodita"
    , "DesCaballero" => "Pisces gold knight. Born in Sweden. The most beautiful among the 88 constellations, 
    he has the conviction that \"Might is justice\". 
    He takes advantage of peculiarities of roses for his cosmos. 
    His attack \"Real Devil Roses\" attacks the opponent with the poison of red roses. 
    Despite believing that \"Power is justice\", he is the knight who most desires peace in the world.
"
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


