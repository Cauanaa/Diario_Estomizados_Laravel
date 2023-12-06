@extends('base.app')

@section('titulo', 'App')

@section('content')

<div style="background-color: #F2D1F5; align-items: center; padding: 15px 30px; width: 100%">
  <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dicas')">
    <img style="width: 6em; display: inline-block;" 
      src="../../imagens/gota-sangue.png" alt="imagem">
    </x-responsive-nav-link>

    <p style="font-weight: bold;font-size: 16px; display: inline-block; margin-left: 1em">
      Artigo 1 - Sistemas digestório e urinário
    </p>
  </div>

  <div style="width:100%; margin-top: 10px; margin-bottom: 40px; flex: 1; justify-content:space-between; flex-direction: column; align-items: center">
    <p style="align-self: center; font-weight: bold; font-size: 18px; padding:10px 50px">
        Sistemas digestório e urinário
    </p>
    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Estoma e o sistemas digestório e urinário
    </p>
    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
        Compreender o funcionamento do sistema digestivo e urinário irá lhe ajudar na 
        compreensão do funcionamento da sua estomia.
    </p>

    <img style="width: 25em; padding: 10px 50px; display: inline-block;" 
      src="../../imagens/imagem_sistemas.png" alt="imagem">

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    O processo de digestão começa na boca, onde inicia com a mastigação. Em seguida, o 
    alimento passa pela faringe e pelo esôfago, até chegar ao estômago. No estômago, 
    ocorre a digestão química, transformando o alimento em uma substância chamada de quimo. 
    Depois, o quimo passa para o intestino delgado (íleo), onde ocorre a maior parte da digestão
     e absorção dos nutrientes.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Nesse processo, enzimas pancreáticas e a bile são liberadas para auxiliar na quebra dos 
    alimentos em moléculas menores. No intestino delgado, os nutrientes são absorvidos. O
     que sobra, como fibras e resíduos não digeridos, segue para o intestino grosso (cólon), 
     onde ocorre a absorção de água e a formação das fezes. Por fim, as fezes são armazenadas 
     no reto até serem eliminadas através do ânus durante a evacuação.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    O sistema urinário é responsável pela produção, armazenamento e eliminação da urina. Os 
    rins são os principais órgãos do sistema urinário. Eles filtram o sangue e produzem a urina.
     A urina passa dos rins até a bexiga pelos ureteres e é armazenada na bexiga até que seja 
     conveniente eliminá-la. Quando a bexiga está cheia, ocorre a eliminação da urina através da 
     uretra - canal que conduz a urina para fora do corpo.
    </p>

    <p style="text-align: left; padding: 10px 50px;font-size: 14px; width: 50%;font-weight: bold">
        Qual é o impacto de uma colostomia ou ileostomia no funcionamento do sistema digestório?
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Uma colostomia ou ileostomia tem um impacto significativo no funcionamento do sistema digestório.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    No caso de uma colostomia, a parte do cólon (intestino grosso) é desviada e conectada a essa abertura, 
    enquanto em uma ileostomia, é o íleo (parte final do intestino delgado) que é desviado. Isso significa
     que as fezes ou o conteúdo intestinal passam diretamente pela abertura (estoma) e são coletados em uma 
     bolsa externa, ao invés de seguir o caminho normal até o reto e serem eliminados pelo ânus.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    Como resultado, a função do cólon ou do íleo é interrompida na passagem das fezes ou do conteúdo 
    intestinal. Além disso, a absorção de água e nutrientes pode ser afetada, já que o tempo de contato
     entre os alimentos e o intestino é reduzido.
    </p>

    <p style="font-size: 14px; width: 100%; padding: 10px 50px; text-align: justify">
    É importante mencionar que, embora uma colostomia ou ileostomia possa alterar o processo normal de
     eliminação de resíduos, o sistema digestório continua a cumprir seu papel fundamental na digestão 
     dos alimentos e na absorção de nutrientes. No entanto, a forma como essas funções são realizadas é
      modificada devido ao desvio criado pela estomia.
    </p>
  </div>

@endsection