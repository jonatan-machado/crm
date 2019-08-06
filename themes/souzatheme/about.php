<?php $v->layout("_theme"); ?>
<section class="container-fluid">
    <div class="my-cont-content d-flex">
    	<div class="changing col-sm-6">
            <div class="about-left " >
                <header class="about-content-tittle">
                    Sobre a clinica Dental
                </header>
                <article class="about-content-subtittle">
                    ATENDIMENTO DIFERENCIADO AOS NOSSOS CLIENTES
                </article>
                <article class="about-content-content">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem 
                </article>
            </div>
            <div class="about-left2">
                <div class="about-box d-flex justify-content-center align-items-center">
                    <div class="box-content">
                        <header class="box-tittle">
                            Encontrem-nos
                        </header>
                        <div class="d-flex justify-space-between find-us" >
                            <div class="col-6">
                                <div class="box-find">
                                    <span class="box-cat">RUA: </span> Alfredo Cunha
                                </div>
                                <div class="box-find">
                                    <span class="box-cat">Num: </span> 50 <span class="box-cat"> / Bloco: </span>04
                                </div>
                                <div class="box-find">
                                    <span class="box-cat">CEP: </span> 99.999-999
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="map-tittle" >
                                    MAPA
                                </div>
                                <div class="map d-flex justify-content-center">
                                    <img src="<?= theme("/assets/images/mapa.png"); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <div class="home-content-buttom " style="margin: auto;">
						<a href="<?= url("/agendar"); ?>">Agendar atendimento</a>
						</div>	
                        
                    </div>
                </div>
            </div>
        </div>        
        <div class="about-right col-md-5 d-flex justify-content-end flex-column">
            <div class="about-me d-flex justify-space-between">
                <img src="<?= theme("/assets/images/fulana.jpg"); ?>" >
                <div>
                    <div class="about-me-name">Fulana</div>
                    <ul class="about-me-list">
                        <li>Graduada em odontologia  pela UFRJ em 2006</li>
                        <li>Pós-graduado em Neurociência pelo UFRJ </li>                            
                        <li>alessadra@odontologia.com.br</li>
                    </ul>                    
                </div>
            </div>
            <div class="about-me d-flex justify-space-between">
                    <img src="<?= theme("/assets/images/fulana.jpg"); ?>" >
                    <div>
                        <div class="about-me-name">Fulana</div>
                        <ul class="about-me-list">
                            <li>Graduada em odontologia  pela UFRJ em 2006</li>
                            <li>Pós-graduado em Neurociência pelo UFRJ </li>                            
                            <li>alessadra@odontologia.com.br</li>
                        </ul>
                        
                    </div>
            </div>
        </div>    
    </div>
</section>		



			
<div class="rgb0">
		<div class="imgbg02">
			<div class="rgb1"></div>
		</div>	
</div>