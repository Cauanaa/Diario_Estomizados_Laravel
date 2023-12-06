@extends('base.app')

@section('titulo', 'App')

@section('content')

<div style="background-color: #F2D1F5; align-items: center; padding: 15px 30px; width: 100%">
  <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dicas')">
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Artigo 3 - Atividades Físicas
    </p>
  </div>

  <div style="width:100%; margin-top: 10px; margin-bottom: 40px; flex: 1; justify-content:space-between; flex-direction: column; align-items: center">
    <p style="align-self: center; font-weight: bold; font-size: 18px; padding:10px 50px">
        Atividades Físicas
    </p>
    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Estomia e a prática de esportes
    </p>
    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Dicas para praticar diversas atividades, desde ioga até esportes em equipe, e orientações
        sobre como se comportar em vestiários.
    </p>

    <img style="width: 25em; padding: 10px 50px; display: inline-block;" 
      src="../../imagens/imagem_esportes.png" alt="imagem">

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Caminhada
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Caminhar é uma forma fácil e suave de retomar a rotina e pode ser iniciada logo após a cirurgia.
        Seja dentro de casa, como subir e descer escadas, ou ao ar livre, caminhar é uma atividade que 
        pode ser gradualmente aumentada em velocidade e distância.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Para desafiar a si mesmo, você pode aumentar sua rota, subir uma colina ou fazer um desvio através de um parque. 
        Ao se desafiar a caminhar mais longe, você melhora sua força e resistência.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Corrida
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Com a autorização do seu médico ou enfermeiro especializado em cuidados com a estomia, a corrida 
        é uma excelente maneira de manter-se em forma. Se você não está acostumado a correr, é importante 
        começar devagar, alternando entre corrida e caminhada.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Ioga
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        A prática de ioga é outra ótima forma de exercício. Ela reduz o estresse, fortalece os músculos, 
        melhora o equilíbrio e a flexibilidade. A ioga pode ser realizada em qualquer lugar, tornando-se uma 
        opção perfeita para começar.

    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        A ioga também é muito adequada para quem estava menos ativo anteriormente, pois pode ser personalizada 
        de acordo com o nível de cada indivíduo.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Natação
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Não evite a piscina devido ao receio de que os outros saibam sobre sua estomia. A natação e a
        hidroginástica são excelentes formas de se manter em forma.

    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Na água, o peso do seu corpo é suportado, o que proporciona um treino muscular com risco mínimo 
        de lesões. A natação também pode ajudar a aumentar a flexibilidade e é uma ótima opção se você 
        sofre de artrite.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Ciclismo
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Antes de começar a andar de bicicleta, é importante consultar o seu médico ou enfermeiro especializado
        em cuidados com a estomia para garantir que a área abdominal esteja completamente cicatrizada. Após
        esse período, andar de bicicleta é uma excelente opção, pois é um exercício de baixo impacto que não
        coloca muita pressão sobre o abdômen.

    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Se você passou por uma cirurgia para a remoção do reto, é necessário esperar um pouco mais para
        começar, a fim de permitir que a área cicatrize. Sentar-se no selim da bicicleta precocemente pode 
        causar desconforto e possíveis lesões.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Caso você não esteja pronto para se exercitar com outras pessoas ou em locais onde possam vê-lo, 
        uma ótima opção é utilizar uma bicicleta ergométrica em casa. Com o tempo, você ganhará confiança para 
        treinar fora de casa.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Golfe
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        O golfe pode ser uma ótima maneira de combinar exercícios ao ar livre e passar tempo com amigos. Com um 
        pouco de preparação, não há razão para impedir que você dê algumas tacadas.

    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        No entanto, é importante estar ciente de que, devido ao torque envolvido em uma tacada de golfe, praticar 
        esse esporte pode exigir medidas extras de segurança com a sua bolsa de estomia.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Treinamento de força
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Uma combinação de treinamento de força e cardiovascular é a melhor maneira de ficar em forma. O treinamento 
        de força fortalece o corpo para outros esportes e reduz o risco de lesões nas articulações. Além disso, molda 
        o corpo e aumenta significativamente a queima de calorias.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        À medida que envelhecemos, perdemos gradualmente massa muscular essencial. O treinamento de força com pesos ou bandas 
        de resistência ajuda a manter ou até mesmo desenvolver músculos, tornando o corpo mais resistente e reduzindo o risco 
        de lesões nas articulações. Além disso, ajuda a manter uma aparência magra e saudável.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Esportes em equipe 
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Contar com a confiança e a presença de outras pessoas pode ser o impulso necessário para começar a se exercitar. Muitos 
        acham mais fácil superar problemas de autoconsciência e se engajar em esportes coletivos, em vez de esportes individuais.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        No entanto, é importante observar que esportes competitivos podem ser intensos, e podem não ser a melhor opção para começar, 
        especialmente se você não estava acostumado a praticar exercícios anteriormente. De qualquer forma, é recomendado verificar 
        com seu médico ou enfermeiro especializado em cuidados com a estomia antes de iniciar qualquer atividade física.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        O que fazer nos vestiários?
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Estar em um vestiário com outras pessoas pode ser um desafio a ser superado. Em situações como essa, é útil antecipar possíveis 
        reações. Você se perguntará: devo esconder a bolsa? Não existe uma resposta certa ou errada, então faça o que for melhor para 
        você. No entanto, se você estiver se exercitando com alguém que conhece, considere se seria mais fácil, a longo prazo, ser aberto 
        e sincero desde o início, em vez de ter que lidar com isso toda vez que vocês se exercitarem juntos.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Pode ser útil pensar em uma explicação com antecedência. Talvez você possa simplesmente dizer que faz algum tempo desde a última 
        vez que se exercitou ou que precisa ir devagar hoje, pois recentemente passou por uma cirurgia abdominal. Essa explicação deve ser 
        o suficiente.
    </p>
  </div>

@endsection