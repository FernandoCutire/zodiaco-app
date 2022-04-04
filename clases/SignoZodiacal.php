<?php

class SignoZodiacal
{
    private $signoZodiacal;
    private $lectura;
    private $variable;
    private $nombreCaballero;
    private $imagen;
    private $descCaballero;
    private $fuente;
    private $fechaLarga;

    // Diferentes signos zodiacales
    public $aries = array("Signo" => "Aries",
        "FechaLarga" => "21 de Marzo al 19 de Abril",
        "Lectura" => "Este día te traerá la posibilidad de dedicarte a cosas que a diario te interesan mucho y para las que no siempre tienes tiempo. Tal vez te decidas hoy a leer un libro, a estudiar o a poner sobre el papel algún proyecto de los que te rondan por la cabeza desde hace tiempo."
    , "NCaballero" => "Mu de Aries"
    , "DesCaballero" => "Es telépata y telequinético. Conocido por tener los poderes mentales más fuertes entre los 12 Santos de Oro, el mismo Aioria lo admite en su pelea contra los Espectros en la Casa de Leo. El Santo de Aries es un increíble manipulador de la teletransportación, con poder suficiente para transportarse el mismo o a varias personas a lugares muy lejanos, incluso otras dimensiones."
    , "Imagen" => "./imagenes/caballeros/Mu_Aries-zodiaco.jpg",
        "Fuente" => "https://es.wikipedia.org/wiki/Mu_de_Aries#Habilidades"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "3", "Mes_fin" => "4");


    public $tauro = array("Signo" => "Tauro",
        "FechaLarga" => "20 de abril al 20 de mayo",
        "Lectura" => "Lo tuyo en días de fiesta es lo que muchos quisieran para sí, Tauro. Sueles hacer planes a diario con gente yse cumplen o no, pero siempre buscas otra salida para pasarlo bien, para que todos se diviertan. Eso es
mucho de agradecer, no todo el mundo sabe organizarse para hacer cosas en grupo y mucho menos cambiar
de rumbo y sacarse de la manga un plan B si el plan A se tuerce."
    , "NCaballero" => "Aldebarán"
    , "DesCaballero" => "es un personaje del manga y anime Saint Seiya conocido en español como Los Caballeros del Zodíaco. Fue el Santo de oro de Tauro hasta su muerte a manos de Niobe de Deep, después fue revivido por
Atena, pero murió nuevamente con los caballeros dorados en el Muro de los Lamentos."
    , "Imagen" => "./imagenes/caballeros/Aldebaran_Tauro-zodiaco.jpg",
        "Fuente" => "https://es.wikipedia.org/wiki/Aldebar%C3%A1n_de_Tauro"
    , "Dia_ini" => "21", "Dia_fin" => "20", "Mes_ini" => "4", "Mes_fin" => "5");


    public $geminis = array("Signo" => "Géminis",
        "FechaLarga" => "21 de Mayo al 20 de Junio",
        "Lectura" => "Este día te traerá la posibilidad de dedicarte a cosas que a diario te interesan mucho y para las que no
siempre tienes tiempo. Tal vez te decidas hoy a leer un libro, a estudiar o a poner sobre el papel algún
proyecto de los que te rondan por la cabeza desde hace tiempo."
    , "NCaballero" => "Saga de Géminis"
    , "DesCaballero" => "Cronos le entrega la daga dorada a Saga, con ella mataría a Atena pero es descubierto por . Años
después aparece como pontífice, aparentemente bajo el mando de Pontos tratando de eliminar a .
Luego de que siente un cosmos malvado poseyendo a Galan, convoca a la reunión dorada. En esa
misma reunión, envía al Santo de Leo para que pelee en contra de Hiperión de Oscuridad que estaba
atacando al Santuario. Luego les explicaría a los restantes Santos de Oro que los Titanes han vuelto para
apoderarse del Megas Drepanon y resucitar al gran dios Cronos."
    , "Imagen" => "./imagenes/caballeros/Saga_Gemini-zodiaco.jpg",
        "Fuente" => "https://es.wikipedia.org/wiki/Saga_de_G%C3%A9minis#Biograf%C3%ADa"
    , "Dia_ini" => "21", "Dia_fin" => "20", "Mes_ini" => "5", "Mes_fin" => "6");


    public $cancer = array("Signo" => "Cáncer",
        "FechaLarga" => "21 de Junio al 22 de Julio",
        "Lectura" => "Estás en buena forma, Cáncer, ya superados algunos problemillas de bajón energético que te han afectado
casi a diario durante la semana, vuelves a tener salud y energía a raudales. Hoy se te nota en tu cara y en tu
forma de hablar y de moverte. Precisamente por esto, porque eres la viva imagen de la fortaleza, hoy podrías
recibir una llamada o una visita de alguien a quien aprecias que te contará un problema que no sabe
resolver"
    , "NCaballero" => "Deathmask"
    , "DesCaballero" => "Deathmask es de carácter severo y despiadado. Siempre aprovechando cualquier oportunidad para dejar
salir su naturaleza cruel sin nunca mostrar algún tipo de miramiento, sólo se propone a seguir su propio
concepto de la justicia o el ideal que elija seguir regido por otra persona."
    , "Imagen" => "./imagenes/caballeros/DeathMask_Cancer-zodiaco.jpg",
        "Fuente" => "https://es.wikipedia.org/wiki/Death_Mask_de_C%C3%A1ncer"
    , "Dia_ini" => "21", "Dia_fin" => "22", "Mes_ini" => "6", "Mes_fin" => "7");

    public $leo = array("Signo" => "Leo",
        "FechaLarga" => "23 de julio al 22 de agosto",
        "Lectura" => "Leo, hoy puedes recibir una llamada respecto a un asunto de trabajo. Atiéndela porque es algo importante
que puede repercutir positivamente en tu futuro y también en tu bolsillo. No es cosa de dejarlo pasar
despreocupadamente sólo porque es un día festivo. Tu bienestar diario quizá dependa de ello."
    , "NCaballero" => "Aiola"
    , "DesCaballero" => "Aiolia fue el Santo de Oro de Leo en la generación del Siglo XX hasta la Guerra contra
Hades en 1990. Aiolia es un personaje del manga y anime conocido como Los Caballeros del
Zodiaco y protagonista de los Spin-offs y . Es el hermano menor de , a pesar de
su personalidad algo explosiva, tiene un corazón puro que identifica rápidamente la justicia, es por eso que
fue uno de los primeros santos en reconocer la autoridad de. Como su hermano Aiolos fue tachado
como traidor, Aiolia sentía una obligación de limpiar el nombre de la familia jurando fidelidad al e incluso
participando voluntariamente en el exterminio de los rebeldes"
    , "Imagen" => "./imagenes/caballeros/Aiolia_Leo-zodiaco.jpg",
        "Fuente" => "https://saintseiya.fandom.com/es/wiki/Aiolia_de_Leo"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "7", "Mes_fin" => "8");

    public $virgo = array("Signo" => "Virgo",
        "FechaLarga" => "23 de agosto al 22 de septiembre",
        "Lectura" => "No es un buen día hoy para temas relacionados con el dinero, Virgo. No lo pongas en la mochila a la espalda
porque te podrían robar y tampoco pruebes en juegos de azar porque vas a perder con toda seguridad. Es
más, podrías encontrar a algún conocido que te quiera dar el sablazo y no sabrías decir que no, como te pasa
a diario. No es que ayudes a quien lo necesita, pero hoy tu dinero corre el riesgo de cambiar de bolsillo sin
que sea necesario para el que lo va a recibir. Protege tus pertenencias,"
    , "NCaballero" => "Shaka"
    , "DesCaballero" => "Shaka es un personaje que destaca por su serenidad y sabiduría, comprendiendo la fisiología del hombre y el mundo a la perfección. Muestra actitudes de arrogancia, superioridad, y sobre todo, de fanfarronería y soberbia en sus combates contra seres que considere inferiores a él, como Santos de Bronce o Specters de baja categoría. A pesar de su tranquilidad, Shaka es un hombre que llega a molestarse con facilidad y actuar con crueldad como se mostró en su encuentro con Ikki; además de que carece totalmente de piedad."
    , "Imagen" => "./imagenes/caballeros/Shaka_Virgo-zodiaco.jpg",
        "Fuente" => "https://saintseiya.fandom.com/es/wiki/Shaka_de_Virgo"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "8", "Mes_fin" => "9");

    public $libra = array("Signo" => "Libra",
        "FechaLarga" => "23 de septiembre al 22 de octubre",
        "Lectura" => "Tienes tendencia a evadirte de la vida real, Libra. Estás viendo a diario todo lo que concierne a tu propia vida como si fuera una película, con personajes ficticios. Y, claro, tú misma te montas el argumento, a tu medida, pero como te gusta sufrir, el film es de género drama. Hoy has de abrir los ojos y darte cuenta de que no hay para tanto, que tus problemas tienen salidas, más de una. Sólo falta que te decidas a ponerte en tu sitio y actuar para que las cosas cambien positivamente para ti."
    , "NCaballero" => "Dohko "
    , "DesCaballero" => "Caballero de oro de Libra. Nacido en China. Es el único que queda vivo de los dos supervivientes de la anterior guerra santa, llamado por todos respetuosamente \"viejo maestro\". A pesar de que generalmente los caballeros luchan con sus cuerpos, la armadura de Libra tiene armas como espada, lanza, etc. Estas armas tienen el poder suficiente para destruir estrellas, por lo que no se pueden usar sin el permiso de Atenea. Dohko también posee un gran poder en su puño."
    , "Imagen" => "./imagenes/caballeros/Dohko_Libra-zodiaco.jpg",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "9", "Mes_fin" => "10");

    public $escorpio = array("Signo" => "Escorpio",
        "FechaLarga" => "23 de octubre al 21 de noviembre",
        "Lectura" => "Ha llegado el día en que puedes mejorar a niveles óptimos tu relación de pareja, Escorpio. Si has pasado por una etapa demasiado rutinaria o se te hacía cansado quedar con esa persona a diario o con mucha frecuencia, hoy esta sensación va a desaparecer. Los astros potencian tu lado más romántico y vas a sorprenderle, porque hacía bastante que no te mostrabas así de cariñosa y apasionada."
    , "NCaballero" => "Milo"
    , "DesCaballero" => "Caballero de oro de Escorpio. Nacido en Grecia. Al igual que Aioria, es impulsivo y tiene un fuerte sentido de la justicia. Está muy orgulloso de ser un caballero de oro. Su técnica \"Aguja escarlata\", que señalando con la punta de la uña y realizando 15 punzadas llega a paralizar los cinco sentidos del contrincante mediante la paralización del sistema nervioso. El caballero de oro Camus de Acuario es su mejor amigo."
    , "Imagen" => "./imagenes/caballeros/Milo_Escorpio-zodiaco.jpg",
        "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "22", "Mes_ini" => "10", "Mes_fin" => "11");

    public $sagitario = array("Signo" => "Sagitario",
        "FechaLarga" => "23 de noviembre al 20 de diciembre",
        "Lectura" => "Pocas veces hay ocasión de empezar de nuevo prácticamente de cero en algunos temas que te han causado problemas y preocupaciones a diario, Sagitario, pero hoy tu conjunción astral te brinda esta oportunidad como el mejor regalo. Hoy se producirá una situación que te hará reconducir tu vida."
    , "NCaballero" => "Aioros"
    , "DesCaballero" => "Caballero de oro de Sagitario. Nacido en Grecia. Murió deshonrado como \"el traidor\" por el incidente del intento de asesinato de Atenea. Sin embargo, es un modelo ejemplar de caballero, que a pesar de haberse ganado el desprecio de los demás, salvó a Atenea costándole la vida. Como aspirante al próximo sumo sacerdote, no se espera menos de su excelente espíritu, cuerpo y técnica, sin importarle el sacrificio para elegir el camino correcto. Finalmente, consigue reencontrarse con su hermano pequeño Aioria en el Muro de los Lamentos."
    , "Imagen" => "./imagenes/caballeros/Aioros_Sagitario-zodiaco.jpg"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "23", "Dia_fin" => "20", "Mes_ini" => "11", "Mes_fin" => "12");

    public $capricornio = array("Signo" => "Capricornio",
        "FechaLarga" => "21 de diciembre al 19 de enero",
        "Lectura" => "Estás deseando progresar, Capricornio, que haya cambios positivos en tu vida y de hecho los hay, sobre todo en los últimos días. Algunos los has sabido apreciar pero otros no tanto. Hay algo que deseas mucho a diario y que hasta ahora no se ha materializado, pero hoy puede surgirte esta oportunidad."
    , "NCaballero" => "Shura"
    , "DesCaballero" => "Caballero de oro de Capricornio. Nacido en España. Es el caballero que hirió de muerte a Aioros, después de recibir las ordenes del Sumo sacerdote (Saga). Originalmente tenía una alta lealtad a su diosa. Es resucitado en forma de espectro por Hades, y siguiendo las órdenes de éste, llevó a cabo combates a muerte con sus antiguos compañeros. Con su técnica \"Excálibur\" sus piernas y brazos se convierten en una filada espada sagrada."
    , "Imagen" => "./imagenes/caballeros/Shaka_Virgo-zodiaco.jpg"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "21", "Dia_fin" => "19", "Mes_ini" => "12", "Mes_fin" => "1");

    public $acuario = array("Signo" => "Acuario",
        "FechaLarga" => "20 de enero al 18 de febrero",
        "Lectura" => "Tu día de descanso hoy, Acuario, será ligeramente distinto a lo habitual. Circunstancias personales te llevarán a tener que echar una mano a alguna persona de tu casa, de tu familia o del círculo de tus amistades o de alguien a quien ves a diario. "
    , "NCaballero" => "Camus"
    , "DesCaballero" => "Caballero de oro de Acuario. Nacido en Francia. Detrás de su frialdad se esconde un corazón caliente. Como guerrero, más que dudar en qué es lo correcto entre lo bueno y lo malo, sigue luchando de acuerdo a sus principios. Por el uso de técnicas de hielo es considerado como \"el mago del agua y el hielo\". Su mayor técnica es la \"Ejecución de la Aurora\", en la cual el espíritu de batalla llega lo más cercano a cero grados."
    , "Imagen" => "./imagenes/caballeros/Camus_Acuario-zodiaco.jpg"
    , "Fuente" => "https://www.saintseiya-gold.com/es/"
    , "Dia_ini" => "20", "Dia_fin" => "18", "Mes_ini" => "1", "Mes_fin" => "2");

    public $piscis = array("Signo" => "Piscis",
        "FechaLarga" => "19 de febrero al 20 de marzo",
        "Lectura" => "Hoy, Piscis, tendrás la mente muy despejada y tu “parabólica” funcionará de maravilla. Sigue los dictados de tu intuición, que te pueden llevar directa hacia el éxito por caminos de lo más insospechado. Si percibes que estás más intuitiva que a diario, aprovéchalo y revisa aquellos temas en los que tenías dudas. Si hoy te viene alguna idea nueva a la cabeza, ten por seguro que es acertada. "
    , "NCaballero" => "Afrodita"
    , "DesCaballero" => "Caballero de oro de Piscis. Nacido en Suecia. El más hermoso entre las 88 constelaciones, tiene la convicción de que \"El poder es justicia\". Aprovecha peculiaridades de las rosas para su cosmos. Su ataque \"Rosas diabólicas reales\" ataca al oponente con el veneno de las rosas rojas. A pesar de creer que \"El poder es justicia\", es el caballero que más desea la paz del mundo."
    , "Imagen" => "./imagenes/caballeros/Afrodita_Piscis-zodiaco.jpg"
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
                $this->setFechaLarga($piscis['FechaLarga']);
            }
        }
    }


}


